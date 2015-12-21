<?php 
namespace PlatziPHP\Http\Controllers;

use Illuminate\Http\Request;

use PlatziPHP\Author;
use PlatziPHP\Http\Views\View;
use PlatziPHP\Post;

class HomeController{

    public function index(Request $request)
    {
        $author = new Author(
            'Anemail@foo.bar',
            '1234',
            'Authordeplatzi'
        );

        $author->setName('jhonny','arana');
        $posts = [
            new Post($author, 'post #1', 'This is post number 1'),
            new Post($author, 'post #2', 'This is post number 1'),
            new Post($author, 'post #3', 'This is post number 1'),
            new Post($author, 'post #4', 'This is post number 1')
        ];
        $view = new View('home',[

            'post' => $posts


            ]);

        $response = $view->render();

        $response->send();
    }
}
