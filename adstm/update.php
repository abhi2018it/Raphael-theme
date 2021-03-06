<?php
/**
 * Author: Vitaly Kukin
 * Date: 21.03.2018
 * Time: 15:20
 */


function rap_updparam() {
    return 'https://alidropship.com/?theme_update=raphael';
}

function rap_switch_theme() {

    if( ! current_user_can('level_9') ) return null;

    if( isset( $_GET['activated'] ) && $_GET['activated'] == 'true' )
        rap_download_language_pack();
}
add_action( 'admin_init', 'rap_switch_theme' );

function rap_init_update_option(){

    if( ! current_user_can('level_9') ) return null;

    if(
        isset($_POST['option_page']) && $_POST['option_page'] == 'general' &&
        isset($_POST['action']) && $_POST['action'] == 'update' &&
        isset($_POST['WPLANG']) ) {

        rap_download_language_pack( $_POST['WPLANG'] );
    }

}
add_action('admin_init', 'rap_init_update_option', 10);

function rap_get_available_translations( $wplang = false ) {

    if( $wplang == 'us_US' ) return false;

    $get_locale = $wplang ? $wplang : get_locale();

    $api_url = 'https://alidropship.com/?locale_update=' . $get_locale . '&update_type=' . get_option('template');

    // Start checking for an update
    $raw_response = wp_remote_get( $api_url, array('sslverify' => false) );

    $response = array();
    if ( ! is_wp_error( $raw_response ) && ( $raw_response[ 'response' ][ 'code' ] == 200 ) ) {
        $response = maybe_unserialize( $raw_response[ 'body' ] );
    }

    return $response;
}

function rap_download_language_pack( $wplang = false ) {

    // Confirm the translation is one we can download.
    $translation = rap_get_available_translations( $wplang ); //todo причём тут ещё и запрос на наличие надо делать языкового файла

    if ( ! $translation && empty( $translation ) ) {
        return false;
    }

    if( isset( $translation[ 'message' ]) ) {

        //пишем в БД для виджета что язык не доступен, но можно помочь себе и проекту
        return false;
    }

    require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';

    $translation       = (object) $translation;
    $translation->slug = get_option('template');
    $translation->type = 'theme';

    $skin     = new Automatic_Upgrader_Skin;
    $upgrader = new Language_Pack_Upgrader( $skin );

    $result = $upgrader->upgrade( $translation, array( 'clear_update_cache' => false ) );

    if ( ! $result || is_wp_error( $result ) ) {
        return false;
    }

    return $translation->language;
}

/**
 * Take over the update check
 *
 * @param $checked_data
 *
 * @return mixed
 */
function rap_check_for_update( $checked_data, $upd = false, $wplang = false, $translation = false  ) {

    global $wp_version;

    if( function_exists('wp_get_theme') ) {
        $theme_data = wp_get_theme(get_option('template'));
        $theme_version = $theme_data->Version;
    }
    else {
        $theme_data = wp_get_theme();
        $theme_version = $theme_data->get( 'Version' );
    }

    $theme_base = get_option('template');

    $api_url = rap_updparam();

    $request = array(
        'slug' => $theme_base,
        'version' => $theme_version
    );

    $get_locale = $wplang ? $wplang : get_locale();
    $api_url .= '&locale=' . $get_locale;

    if( $translation )
        $api_url .= '&need_translation=true';

    // Start checking for an update
    $send_for_check = array(
        'body' => array(
            'action' => 'basic_check',
            'request' => serialize($request),
            'api-key' => md5(get_bloginfo('url'))
        ),
        'user-agent' => 'WordPress/' . $wp_version . '; ' . get_bloginfo('url')
    );

    $raw_response = wp_remote_post($api_url, $send_for_check);

    $response = '';

    if (!is_wp_error($raw_response) && ($raw_response['response']['code'] == 200))
        $response = @unserialize($raw_response['body']);

    // Feed the update data into WP updater
    if ( $response && ! empty( $response ) ) {

        $response = (array) $response;
        $checked_data->response[ $theme_base ] = $response;
        $checked_data->translations[] = isset( $response[ 'translations' ] ) ? $response[ 'translations' ] : [];
    }

    return $checked_data;
}
add_filter('pre_set_site_transient_update_themes', 'rap_check_for_update');


/**
 * Take over the Theme info screen
 *
 * @param $def
 * @param $action
 * @param $args
 *
 * @return bool|mixed|WP_Error
 */
function rap_theme_api_call( $def, $action, $args ) {

    global $wp_version;

    if( function_exists('wp_get_theme') ) {
        $theme_data = wp_get_theme(get_option('template'));
        $theme_version = $theme_data->Version;
    }
    else {
        $theme_data = wp_get_theme();
        $theme_version = $theme_data->get( 'Version' );
    }

    $theme_base = get_option('template');

    $api_url = rap_updparam();

    if ($args->slug != $theme_base)
        return false;

    $args->slug      = $theme_base;
    $args->version   = $theme_version;
    $args->site      = get_bloginfo( 'url' );

    $request_string = array(
        'body'        => array(
            'action'  => $action,
            'request' => serialize( $args )
        ),
        'user-agent'  => 'WordPress/' . $wp_version . '; ' . get_bloginfo( 'url' )
    );

    $request = wp_remote_post($api_url, $request_string);

    if (is_wp_error($request)) {
        $res = new WP_Error('themes_api_failed',
            __('<p>An Unexpected HTTP Error occurred during the API request.</p> <p><a href="?" onclick="document.location.reload(); return false;">Try again</a></p>', 'rap'), $request->get_error_message());
    } else {
        $res = unserialize($request['body']);

        if ($res === false)
            $res = new WP_Error('themes_api_failed', __('An unknown error occurred', 'rap'), $request['body']);
    }

    return $res;
}
add_filter('themes_api', 'rap_theme_api_call', 10, 3);