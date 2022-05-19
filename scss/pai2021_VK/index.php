<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('mapa', 'DefaultController');
Router::post('login', 'SecurityController');
Router::post('addPhoto', 'PhotoController');
Router::post('register', 'SecurityController');
Router::post('search', 'ProjectController');


Router::run($path);