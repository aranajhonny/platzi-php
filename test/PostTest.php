<?php  

use PlatziPHP\Post;

class PostTest extends PHPunit_Framework_TestCase
{
    /** @test */
    function it_gives_us_the_author_name()
    {

        $author = new \PlatziPHP\Domain\Author(
            'mail',
            '1234',
            'Authordeplatzi'
            );

        $author->setName('jhonny','arana');

        $post = new PlatziPHP\Domain\Post($author, 'A title post', 'A body post');

        $this->assertEquals(
            'By jhonny',
            $post->getAuthor()

            );

    }




}
