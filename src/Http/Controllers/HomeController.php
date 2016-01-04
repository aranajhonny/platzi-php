<?php 
namespace PlatziPHP\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use PlatziPHP\Infrastructure\FakeDatabase;
use PlatziPHP\Http\Views\View;

class HomeController extends Controller
{
    /**
     * @var FakeDatabase
     */
    private $db;

    public function __construct(FakeDatabase $db)
    {

        $this->db = $db;
    }
    public function index(Request $request)
    {
        $posts = $this->db->posts();

        $first = $posts->first();

        $view = new View('home',[

            'post' => $posts,

            'firstPost'=> $first

            ]);
        return $view->render();
    }

    public function show($id)
    {
        $post = $this->db->posts();


        $view = new View('post_details',[
           'post' => $post->get($id)
        ]);

        return $view->render();
    }
}
