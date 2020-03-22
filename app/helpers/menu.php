<?php

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