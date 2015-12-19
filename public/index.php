<?php  

use Illuminate\Http\Request; 

use PlatziPHP\Http\Controllers\HomeController;

require_once __DIR__ . '/../vendor/autoload.php';


$request = Request::capture();

$controller = new  HomeController();

$controller->index($request);
