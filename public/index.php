<?php

use Phalcon\Loader;
use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\View;
use Phalcon\Mvc\ViewSimple;
use Phalcon\Mvc\Url as UrlProvider;
use Phalcon\Mvc\Application;

if( isset( $_SERVER['HTTPS'] ) ){
    $protocol = ( $_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off" ) ? "https" : "http";
} else{
    $protocol = 'http';
}

// Defines
define( 'BASE_URL', $protocol . "://" . $_SERVER['SERVER_NAME'] );
define( 'BASE_PATH', dirname( __DIR__ ) );
define( 'APP_PATH', BASE_PATH . '/app' );

// Initialize Loader
$loader = new Loader();

$loader->registerDirs(
    [
        APP_PATH . '/controllers/',
        APP_PATH . '/models/',
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

// Incoming Request Handlers
$application = new Application($di);
$response = $application->handle();
$response->send();