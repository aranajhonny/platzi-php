<?php 
namespace PlatziPHP\Http\Controllers;

use Illuminate\Http\Request;

use PlatziPHP\Http\Views\View;

class HomeController{

    public function index(Request $request){
        $view = new View('home',[

            'message' => 'Hello From a View'


            ]);

        $response = $view->render();

        $response->send();
    }
}
