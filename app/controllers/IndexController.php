<?php

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function initialize()
    {
        $this->tag->setTitle( 'Simple Phalcon' );
    }

    public function indexAction()
    {

    }
}