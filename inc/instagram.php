<?php

/**
 * User: sunfun
 * Date: 03.09.16
 * Time: 22:44
 */
class adstm_instagram
{

    private $userName;

    public $size = 'thumbnail';

    const ID_WIDGET = 'ADS_WIDGET_INSTAGRAM';
    const TIME_WIDGET = 'ADS_WIDGET_INSTAGRAM_TIME';

    public function __construct($userName)
    {
        if (!empty($userName))
            $this->userName = $userName;
    }


    /**
     * @return array|bool
     */
    public function params()
    {
        $foo = $this->data();

        /* Disable formatting for new instagram widget html */

        if(isset($foo['thumbnail']) && $foo['thumbnail']){
            $foo['images'] = array_map(function ($img) {
                return $this->formatImage($img);
            }, $foo['thumbnail']);
        }

        return $foo;
    }

    private function formatImage($url)
    {
        $format = [
            'thumbnail' => 0,//150
            '240' => 2,//240
            'low' => 2,//320
            'standard' => 3,//480
            'high' => 4//640
        ];

        return $url[$format[$this->size]]['src'];
    }

    private function data()
    {
        $params = $this->getCache();

        if($params && get_transient(self::TIME_WIDGET) ){
            return $params;
        }

        $NewParams = $this->getParams();

        if ($NewParams) {
            $this->setCache($NewParams);
            return $NewParams;
        }

        return $params;
    }

    private function getParams()
    {
        $html = $this->loadIframe();

        return $this->parseParams($html);
    }

    private function getCache()
    {
        return get_option(self::ID_WIDGET);
    }

    private function setCache($params)
    {
        update_option(self::ID_WIDGET, $params, true);
        return set_transient(self::TIME_WIDGET, 1, 12 * HOUR_IN_SECONDS);
    }

    static public function clearCache()
    {
        delete_transient(self::TIME_WIDGET);
        delete_option(self::ID_WIDGET);
    }

    private function parseParams($html)
    {

        $foo = [
            'images' => [],
            'photos' => false,
            'followers' => false,
            'thumbnail' => [],
        ];

        if (preg_match('/window\._sharedData\s*=\s*(.*)<\/script>/Uiu', $html, $match)) {
            $data = trim(trim($match[1]), ';');
            $data = json_decode($data, true);

            if(!isset($data['entry_data']['ProfilePage'][0]['graphql']['user']['edge_followed_by']['count'])){
                return false;
            }

            $foo['followers'] = $data['entry_data']['ProfilePage'][0]['graphql']['user']['edge_followed_by']['count'];

            if(!isset($data['entry_data']['ProfilePage'][0]['graphql']['user']['edge_owner_to_timeline_media']['count'])){
                return false;
            }

            $foo['photos'] = $data['entry_data']['ProfilePage'][0]['graphql']['user']['edge_owner_to_timeline_media']['count'];

            $edges = $data['entry_data']['ProfilePage'][0]['graphql']['user']['edge_owner_to_timeline_media']['edges'];

            if(!$edges){
                return false;
            }

            foreach ($edges as $k=>$v){
                $foo['images'][] = $v['node']['display_url'];
                $foo['thumbnail'][] = $v['node']['thumbnail_resources'];
            }

            return $foo;
        }

        return false;
    }

    private function loadIframe()
    {

        $response = wp_remote_get('https://www.instagram.com/'.$this->userName.'/');

        if (is_array($response) && !is_wp_error($response)) {
            return $response['body'];
        }

        return false;
    }
}
