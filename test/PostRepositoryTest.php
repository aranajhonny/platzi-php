<?php

use PlatziPHP\Infrastructure\PostRepository;

class PostRepositoryTest extends PHPUnit_Framework_TestCase
{
    function test_All_repository()
    {
        $posts = new PlatziPHP\Infrastructure\PostRepository();

        $result = $posts->all();

        $this->assertInstanceOf(
            \Illuminate\Support\Collection::class,
        $result
        );

        foreach ($result as $post) {
            $this->assertInstanceOf(
                \PlatziPHP\Domain\Post::class,
                $post
            );

        }

    }

    function test_find_a_post_by_id()
    {
        $posts = new PostRepository();

        $post = $posts->find(4);

        $this->assertInstanceOf(
            \PlatziPHP\Domain\Post::class,
            $post
        );
    }

    function test_fail_find_a_post_by_id()
    {
        $posts = new PostRepository();
        $this->setExpectedException(\OutOfBoundsException::class);
        $posts->find(525);

    }

    function test_searching_post()
    {
        $posts = new PostRepository();

        $results = $posts->search('cs');

        $this->assertInstanceOf(\Illuminate\Support\Collection::class, $results);
    }

}