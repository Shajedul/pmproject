<?php
require 'bootstrap.php';
$router= Router::load('routes.php');
require $router->direct(Request::uri());
