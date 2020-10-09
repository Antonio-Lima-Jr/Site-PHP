<?php

require __DIR__ . '/vendor/autoload.php';

use CoffeeCode\Router\Router;

$router = new Router( ROOT );
/**
* Controlers
*/
$router->namespace( 'Source\App' );

/**
* WEB
* home
*/
$router->group( null );
$router->get( '/', 'Web:home' );
$router->get('/sobre' , 'Web:sobre');
$router->get('/portfolio' , 'Web:portifolio');


/**
* AJAX 
*/
$router->group( "contato" );
$router->get( '/', 'Web:contact' );
$router->post( '/client', 'Form:client' );

/**
 * blog
 */

$router->group( "blog" );
$router->get( "/", "Blog:home");
$router->get( "/{titulo}", "Blog:article");
$router->post( "/coments", "Blog:coments");
$router->post( "/getcoments", "Blog:getComents");


/**
* ERRORS
*/
$router->group( 'ooops' );
$router->get( '/{errcode}', 'Web:error' );

$router->dispatch();

if ( $router->error() ) {
  $router->redirect( "/ooops/{$router->error()}" );
}