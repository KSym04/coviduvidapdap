<?php

defined( 'BASE_PATH' ) || exit;

/**
 * Notifications check.
 * 
 * @since 1.0.0
 */
function notificationsCheck( $num, $css_class = '' ) {
    if ( 0 == $num ) {
        return sprintf( '<td></td>', $num );
    } else {
        return sprintf( '<td class="%1$s">+%2$s</td>', $css_class, number_format( $num ) );
    }
}

/**
 * Get new json data.
 * 
 * @since 1.0.0
 */
function getNewData( $url, $file_name ) {
    if( empty( $url ) ) {
        return;
    }

    if( empty( $file_name ) ) {
        return;
    }

    $ch = curl_init();
    $fp = fopen( BASE_PATH . "/public/data/" . $file_name . "-" . $GLOBALS['dateset'] . ".json", "w+" );
    curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ch, CURLOPT_FILE, $fp );
    curl_setopt( $ch, CURLOPT_URL, $url );
    curl_exec( $ch );
    curl_close( $ch );
    fclose( $fp );
}

/**
 * Get visitor country code.
 * 
 * @since 1.0.0
 */
function getCountryCode() {
    $country_code = ! empty( $_SERVER["HTTP_CF_IPCOUNTRY"] ) ? strtolower( $_SERVER["HTTP_CF_IPCOUNTRY"] ) : 'unknown';
    return $country_code;
}