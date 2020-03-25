<?php

use Phalcon\Mvc\Controller;

/**
 * Myth Busters Controller class.
 * 
 * @since 1.0.6
 */
class MythbustersController extends Controller
{
    
    /**
     * Initialize page.
     * 
     * @since  1.0.6
     * @access public
     * 
     * @return void
     */
    public function initialize()
    {
        $this->tag->setTitle( 'Covid-19 Myth Busters / Coviduvidapdap' );
    }

    /**
     * Index actions.
     * 
     * @since  1.0.6
     * @access public
     * 
     * @return void
     */
    public function indexAction()
    {

    }

}