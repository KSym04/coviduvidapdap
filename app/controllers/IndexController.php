<?php

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function initialize()
    {
        $this->tag->setTitle( 'Coviduvidapdap - 🦠 Novel coronavirus tracker, cases updates, statistics and charts' );
    }

    public function indexAction()
    {
        // Latest counts.
        $all_obj = file_get_contents( BASE_URL . '/data/all.json' );
        $this->view->setVar( "current_counts_obj", json_decode( $all_obj ) );

        // All countries.
        $countries_obj = file_get_contents( BASE_URL . '/data/countries.json' );
        $this->view->setVar( "table_obj", json_decode( $countries_obj ) );
    }
}