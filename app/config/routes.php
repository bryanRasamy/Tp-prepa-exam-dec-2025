<?php

use app\controllers\TrajetController;
use app\middlewares\SecurityHeadersMiddleware;
use flight\Engine;
use flight\net\Router;

/** 
 * @var Router $router 
 * @var Engine $app
 */

// This wraps all routes in the group with the SecurityHeadersMiddleware
$router->group('', function(Router $router) use ($app) {
	$controller = new TrajetController($app);
	$router->get('/',function(){
		Flight::render('accueil');
	});

	$router->get('/benef/jour', [$controller,'getbeneficeparjour']);

	$router->get('/trajet/rentable/jour', [$controller,'gettrajetleplusrentable']);

	// $router->get('/ajout',function(){
	// 	Flight::render('ajout');
	// });

	// $router->get('/ajout/@id',function($id){
	// 	Flight::render('ajout',['id' => $id]);
	// });

	// $router->post('/add', [$controller,'addProduit']);
	
}, [ SecurityHeadersMiddleware::class ]);