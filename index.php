<?php

date_default_timezone_set('America/Sao_Paulo');
session_start();

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
 * Autenticação
 */
$router->group("dashboard");
$router->get('/', 'Dashboard:login');
$router->get('/home', 'Dashboard:dashboard');
$router->get('/composeblog', 'Dashboard:composeBlog');
$router->get('/listblog', 'Dashboard:listblog');
$router->get('/composeblog/alterarpost/{id}', 'Dashboard:alterarPost');

$router->get('/logout', 'Dashboard:logout');

/**
 * AJAX
 * autorização
 */
$router->post('/authoriz', 'Dashboard:autorizar');
/**
 * Salvar Artigo no banco de dados
 */
$router->post('/composeblog/save', 'Dashboard:savePost');
$router->post('/composeblog/delete', 'Dashboard:deletePost');


/**
* ERRORS
*/
$router->group( 'ooops' );
$router->get( '/{errcode}', 'Web:error' );

$router->dispatch();

if ( $router->error() ) {
  $router->redirect( "/ooops/{$router->error()}" );
}