<?php

use Phalcon\Mvc\Controller;

/**
 * Fetch Controller class.
 * 
 * @since 1.0.0
 */
class FetchController extends Controller
{

    /**
     * Initialize page.
     * 
     * @since  1.0.0
     * @access public
     * 
     * @return void
     */
    public function initialize()
    {
        $this->tag->setTitle( 'Fetch / Coviduvidapdap' );
    }

    /**
     * Index actions.
     * 
     * @since  1.0.0
     * @access public
     * 
     * @return void
     */
    public function indexAction()
    {

    }
}