<?php

use Phalcon\Mvc\Controller;

/**
 * Error Controller class.
 * 
 * @since 1.0.6
 */
class ErrorController extends Controller
{

    /**
     * Show 404 Page.
     * 
     * @since  1.0.6
     * @access public
     * 
     * @return void
     */
    public function show404Action()
    {
        $this->response->setStatusCode( 404, 'Not Found' );
        $this->view->pick( '404/404' );
    }

}