<?php

namespace PlatziPHP\Domain;


use PlatziPHP\Infrastructure\PostRepository;

class Imprint
{
    /**
     * @type PostRepository
     */
    private $posts;

    public function __construct(PostRepository $posts )
    {
        $this->posts = $posts;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function listPublishedPost()
    {
        return $this->posts->all();
    }

    public function findById($id)
    {
        return $this->posts->find($id);
    }
}