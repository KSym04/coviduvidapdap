<?php

defined( 'BASE_PATH' ) || exit;

/**
 * Header meta.
 * 
 * @since 1.0.0
 */
function headerMeta() {
    return '<meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <meta name="msvalidate.01" content="35923DE3BC3807594902A174663F28B9" />
            <link rel="dns-prefetch" href="//coviduvidapdap.com" />
            <link rel="dns-prefetch" href="//cdn.jsdelivr.net" />
            <link rel="dns-prefetch" href="//fonts.googleapis.com" />
            <link rel="dns-prefetch" href="//use.fontawesome.com" />
            <link rel="dns-prefetch" href="//ajax.cloudflare.com" />';
}

/**
 * Display favicon.
 * 
 * @since 1.0.0
 */
function showFavicon() {
    return '<link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-icon-57x57.png">
            <link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple-icon-60x60.png">
            <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-icon-72x72.png">
            <link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-icon-76x76.png">
            <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-icon-114x114.png">
            <link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-icon-120x120.png">
            <link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-icon-144x144.png">
            <link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-icon-152x152.png">
            <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
            <link rel="icon" type="image/png" sizes="192x192"  href="/img/favicon/android-icon-192x192.png">
            <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
            <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
            <link rel="manifest" href="/img/favicon/manifest.json">
            <meta name="msapplication-TileColor" content="#ffffff">
            <meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">
            <meta name="theme-color" content="#ffffff">';
}

/**
 * Display main menu.
 * 
 * @since 1.0.0
 */
function displayMenu( $menulist = array() ) {
    return '<div class="navbar-end is-clearfix">
                <strong class="has-text-white">Share</strong>
                <p class="buttons is-pulled-right">
                    <a href="https://twitter.com/intent/tweet?url=' . BASE_URL . '&text='. urlencode( 'novel coronavirus tracker, statistics & charts #coviduvidapdap #coviubidapdap' ) .'" target="_blank" rel="nofollow noopener" class="button  is-info">
                        <span class="icon">
                            <i class="fab fa-twitter"></i>
                        </span>
                        <span>Twitter</span>
                    </a>

                    <a href="https://www.facebook.com/sharer.php?u=' . BASE_URL . '&t='. urlencode( 'novel coronavirus tracker, statistics & charts #coviduvidapdap #coviubidapdap' ) .'" target="_blank" rel="nofollow noopener" class="button is-link">
                        <span class="icon">
                            <i class="fab fa-facebook"></i>
                        </span>
                        <span>Facebook</span>
                    </a>
                </p>
            </div>';
}

/**
 * Footer contents.
 * 
 * @since 1.0.0
 */
function footerContents() {
    return '<!-- BEGIN FOOTER -->
            <footer class="site-page__footer">
                <div class="site-page__footer-inner">
                    
                    <div class="site-page__copyright container is-widescreen">
                        <div class="columns">
                            <div class="column is-1"></div>
                            <div class="column">
                                <p class="credits footer-blurb">' . sprintf( 'made with <span class="fas fa-heart"></span> by <a href="https://github.com/KSym04/coviduvidapdap" target="_blank" rel="nofollow noopener">%s</a> <br /> <sub>Keep Safe Everyone!</sub>', 'Ken' ) . '</p>
                            </div>
                            <div class="column">
                                <p class="credits footer-nav">' . 
                                    sprintf( '<a href="%1$s">%2$s</a> <br /> <sub>BTC Tips: <a href="%3$s" target="_blank" rel="nofollow noopener">%4$s</a></sub>', 
                                        BASE_URL . '/privacy', 
                                        'Privacy',
                                        'https://www.blockchain.com/btc/address/1PFTxz29vUh4BRhrRq8Gy9TxQNUTnLm3js',
                                        '1PFTxz29vUh4BRhrRq8Gy9TxQNUTnLm3js' ) . 
                                '</p>
                            </div>
                            <div class="column is-1"></div>
                        </div>
                    </div>

                </div><!-- .site-page__footer-inner -->
            </footer><!-- .site-page__footer -->
            <!-- END FOOTER -->';
}