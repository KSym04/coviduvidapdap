<?php

use Phalcon\Mvc\Controller;

/**
 * Index Controller class.
 * 
 * @since 1.0.0
 */
class IndexController extends Controller
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
        $this->tag->setTitle( 'Coviduvidapdap - Novel coronavirus tracker, cases updates, alerts, statistics, charts, wiki and helpful resources' );
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
        // All.
        $all_obj = json_decode( file_get_contents( BASE_URL . '/data/all-' . $GLOBALS['dateset'] . '.json' ) );
        if( empty( $all_obj ) ) {
            getNewData( 'https://corona.lmao.ninja/all', 'all' );
            $all_obj = json_decode( file_get_contents( BASE_URL . '/data/all-' . $GLOBALS['dateset'] . '.json' ) );
        }

        $this->view->setVar( "current_counts_obj", $all_obj );

        // Countries.
        $countries_obj = json_decode( file_get_contents( BASE_URL . '/data/countries-' . $GLOBALS['dateset'] . '.json' ) );
        if( empty( $countries_obj ) ) {
            getNewData( 'https://corona.lmao.ninja/countries', 'countries' );
            $countries_obj = json_decode( file_get_contents( BASE_URL . '/data/countries-' . $GLOBALS['dateset'] . '.json' ) );
        }

        $this->view->setVar( "table_obj",  $countries_obj );
    }

}