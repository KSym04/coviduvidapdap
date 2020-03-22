<?php
/**
 * Notifications check.
 * 
 * since 1.0.0
 */
function notificationsCheck( $num, $css_class = '' ) {
    if ( 0 == $num ) {
        return sprintf( '<td></td>', $num );
    } else {
        return sprintf( '<td class="%1$s">+%2$s</td>', $css_class, $num );
    }
}