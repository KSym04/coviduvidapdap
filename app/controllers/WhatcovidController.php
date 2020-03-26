<?php

use Phalcon\Mvc\Controller;

/**
 * What is Covid-19 Controller class.
 * 
 * @since 1.0.8
 */
class WhatcovidController extends Controller
{
    
    /**
     * Initialize page.
     * 
     * @since  1.0.8
     * @access public
     * 
     * @return void
     */
    public function initialize()
    {
        $this->tag->setTitle( 'What is Covid-19? / Coviduvidapdap' );
    }

    /**
     * Index actions.
     * 
     * @since  1.0.8
     * @access public
     * 
     * @return void
     */
    public function indexAction()
    {

    }

}