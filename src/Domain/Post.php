<?php 
namespace PlatziPHP\Domain;

class Post
{
    private $id;

    private $author;

    private $title;

    private $body;

    public function __construct( $authorId, $title, $body)
    {
        $this->author = $authorId;
        $this->title = $title;
        $this->body = $body;
        $this->id = $id;
    }
    public static function create(Author $author, $title, $body)
    {
        $post = new Post($author, $title,  $body);

        return $post;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getBody()
    {
        return $this->body;
    }  

    public function getAuthor()
    {

        return 'By ' . $this->author->getFirstName();
    }

}
