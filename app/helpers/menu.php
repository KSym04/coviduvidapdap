<?php

/**
 * Display main menu.
 * 
 * @since 1.0.0
 */
function displayMenu( $menulist = array() ) {
    return '<div class="navbar-end">
                <strong class="has-text-white">Share</strong>
                <p class="buttons">
                    <a href="https://twitter.com/intent/tweet?url=' . BASE_URL . '" target="_blank" rel="nofollow noopener" class="button  is-info">
                        <span class="icon">
                            <i class="fab fa-twitter"></i>
                        </span>
                        <span>Twitter</span>
                    </a>

                    <a href="https://www.facebook.com/sharer.php?u=' . BASE_URL . '" target="_blank" rel="nofollow noopener" class="button is-link">
                        <span class="icon">
                            <i class="fab fa-facebook"></i>
                        </span>
                        <span>Facebook</span>
                    </a>
                </p>
            </div>';
}