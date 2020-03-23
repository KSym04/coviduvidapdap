<?php

use Phalcon\Loader;
use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\View;
use Phalcon\Mvc\ViewSimple;
use Phalcon\Mvc\Url as UrlProvider;
use Phalcon\Mvc\Application;
use Phalcon\Mvc\Router;
use Phalcon\Mvc\Dispatcher as PhDispatcher;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;

date_default_timezone_set( 'Asia/Manila' );
ini_set( "allow_url_fopen", 1 );

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

        // privacy policy.
        $router->add("/privacy-policy", array(
            "controller" => 'privacy'
        ));

        // fetch.
        $router->add("/fetch", array(
            "controller" => 'fetch'
        ));

        $router->handle();
        return $router;
    }
);

// Incoming Request Handlers
$application = new Application($di);
$response = $application->handle();
$response->send();