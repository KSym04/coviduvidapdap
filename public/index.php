<?php

use Phalcon\Loader;
use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\View;
use Phalcon\Mvc\ViewSimple;
use Phalcon\Mvc\Application;
use Phalcon\Mvc\Router;
use Phalcon\Mvc\Url as UrlProvider;
use Phalcon\Mvc\Dispatcher as PhDispatcher;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;

date_default_timezone_set( 'Asia/Manila' );
ini_set( "allow_url_fopen", 1 );

$GLOBALS['dateset'] = date( "Y-m-d", time() );
$GLOBALS['siteversion'] = '1.0.11';

// Detect protocols.
if( isset( $_SERVER['HTTPS'] ) ){
    $protocol = ( $_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off" ) ? "https" : "http";
} else{
    $protocol = 'http';
}

// Defines & helpers.
define( 'BASE_URL', $protocol . "://" . $_SERVER['SERVER_NAME'] );
define( 'BASE_PATH', dirname( __DIR__ ) );
define( 'APP_PATH', BASE_PATH . '/app' );

require_once( APP_PATH . '/helpers/snippets.php' );
require_once( APP_PATH . '/helpers/templates.php' );

// Initialize Loader
$loader = new Loader();
$loader->registerDirs(
    [ 
        APP_PATH . '/controllers/'
    ]
);
$loader->register();

// Create Dependency Injection
$di = new FactoryDefault();

// View Components
$di->set(
    'view',
    function () {
        $view = new View();
        $view->setViewsDir( APP_PATH . '/views/' );
        return $view;
    }
);

// Setup Base Uri
$di->set(
    'url',
    function () {
        $url = new UrlProvider();
        $url->setBaseUri('/');
        return $url;
    }
);

// Setup Router.
$di->set(
    'router', 
    function() {
        $router = new Router();
        $router->removeExtraSlashes(true);

        // fetch.
        $router->add("/fetch", array(
            "controller" => 'fetch'
        ));

        // privacy policy.
        $router->add("/privacy-policy", array(
            "controller" => 'privacy'
        ));

        // disclaimer.
        $router->add("/disclaimer", array(
            "controller" => 'disclaimer'
        ));

        // mythbusters.
        $router->add("/myth-busters", array(
            "controller" => 'mythbusters'
        ));

        // what is covid 19.
        $router->add("/what-is-covid-19", array(
            "controller" => 'whatcovid'
        ));

        // terms.
        $router->add("/terms", array(
            "controller" => 'terms'
        ));

        // data sources
        $router->add("/data-sources", array(
            "controller" => 'datasources'
        ));

        $router->handle();
        return $router;
    }
);

// Setup Error Notice.
$di->set(
    'dispatcher',
    function() use ($di) {

        $evManager = $di->getShared('eventsManager');

        $evManager->attach(
            "dispatch:beforeException",
            function($event, $dispatcher, $exception)
            {
                switch ($exception->getCode()) {
                    case PhDispatcher::EXCEPTION_HANDLER_NOT_FOUND:
                    case PhDispatcher::EXCEPTION_ACTION_NOT_FOUND:
                        $dispatcher->forward(
                            array(
                                'controller' => 'error',
                                'action'     => 'show404',
                            )
                        );
                        return false;
                }
            }
        );
        $dispatcher = new PhDispatcher();
        $dispatcher->setEventsManager($evManager);
        return $dispatcher;
    },
    true
);

// Incoming Request Handlers
$application = new Application($di);
$response = $application->handle();
$response->send();