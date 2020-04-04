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
            <meta name="description" content="Novel coronavirus tracker, cases updates, alerts, statistics, charts, wiki and helpful resources">
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
    return '<div class="navbar-end header-nav__wiki is-clearfix">
                <nav class="navbar" role="navigation" aria-label="dropdown navigation">
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">Wiki</a>
                
                        <div class="navbar-dropdown">
                            <a class="navbar-item" href="' . BASE_URL . '/what-is-covid-19">What is COVID-19?</a>
                            <a class="navbar-item" href="' . BASE_URL . '/myth-busters">Myth Busters</a>
                            <a class="navbar-item" href="' . BASE_URL . '/data-sources">Data Sources</a>
                        </div>
                    </div>
                </nav>

                <div class="wiki-separator">|</div>

                <p class="buttons is-pulled-left">
                    <a href="https://twitter.com/intent/tweet?url=https://tinyurl.com/rmmv2ac&text='. urlencode( 'Novel coronavirus tracker, cases updates, alerts, statistics, charts, wiki and helpful resources' ) .'" target="_blank" rel="nofollow noopener" class="button is-small is-info" title="Share on Twitter">
                        <span class="icon">
                            <i class="fab fa-twitter"></i>
                        </span>
                        <span class="txt">Twitter</span>
                    </a>

                    <a href="https://www.facebook.com/sharer.php?u=https://tinyurl.com/rmmv2ac&t='. urlencode( 'Novel coronavirus tracker, cases updates, alerts, statistics, charts, wiki and helpful resources' ) .'" target="_blank" rel="nofollow noopener" class="button is-link is-small" title="Share on Facebook">
                        <span class="icon">
                            <i class="fab fa-facebook"></i>
                        </span>
                        <span class="txt">Facebook</span>
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
                    
                    <div class="site-page__copyright container">
                        <div class="columns">
                            <div class="column is-1"></div>
                            <div class="column">
                                <p class="credits footer-blurb">' . sprintf( 'made with <span class="fas fa-heart"></span> by <a href="https://github.com/KSym04/coviduvidapdap" target="_blank" rel="nofollow noopener">%s</a>, best viewed with <a href="https://brave.com/cov261" target="_blank" rel="nofollow noopener">Brave</a> <br /> <sub>Keep Safe Everyone!</sub>', 'Ken' ) . '</p>
                            </div>
                            <div class="column">
                                <div class="credits footer-nav">
                                    <ul>
                                        <li><a href="' . BASE_URL . '/disclaimer">Disclaimer</a></li>
                                        <li><a href="' . BASE_URL . '/terms">Terms</a></li>
                                        <li><a href="' . BASE_URL . '/privacy-policy">Privacy</a></li>
                                    </ul>
                                
                                    <sub>BTC Tips: <a href="https://www.blockchain.com/btc/address/1PFTxz29vUh4BRhrRq8Gy9TxQNUTnLm3js" target="_blank" rel="nofollow noopener">1PFTxz29vUh4BRhrRq8Gy9TxQNUTnLm3js</a></sub>
                                </div>
                            </div>
                            <div class="column is-1"></div>
                        </div>
                    </div>

                </div><!-- .site-page__footer-inner -->
            </footer><!-- .site-page__footer -->
            <!-- END FOOTER -->';
}