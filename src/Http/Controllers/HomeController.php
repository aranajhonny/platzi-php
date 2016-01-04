<?php 
namespace PlatziPHP\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use PlatziPHP\Domain\Imprint;
use PlatziPHP\Http\Views\View;

class HomeController extends Controller
{
    private $Imprint;       

    public function __construct(Imprint $Imprint)
    {
        $this->Imprint = $Imprint;
    }
    public function index(Request $request)
    {
        $posts = $this->Imprint->listPublishedPost();

        $first = $posts->first();

        $view = new View('home',[

            'post' => $posts,

            'firstPost'=> $first

            ]);
        return $view->render();
    }

    public function show($id)
    {
        $post = $this->Imprint->listPublishedPost();


        $view = new View('post_details',[
           'post' => $post->get($id)
        ]);

        return $view->render();
    }
}
