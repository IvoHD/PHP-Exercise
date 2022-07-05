<?php
require 'core/bootstrap.php';

$routes = [
	'/hallo/welt' => 'WelcomeController@index',
	'/spam' => 'SpamController@spam',
	'/beer' => 'BeerController@beer',
	'/pixel' => 'PixelController@pixel',

	//form
	'/form' => "FormController@form",
	'/validate' => "FormController@validate",
];

$db = [
	'name'     => 'meinedatenbank',
	'username' => 'root',
	'password' => '',
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');