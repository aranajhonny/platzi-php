<?php  

use PlatziPHP\Author;

class AuthorTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    function it_should_construct()
    {

        $author = new Author(
            'Anemail@foo.bar',
            '1234',
            'Authordeplatzi'

            );

        $this->assertInstanceOf(Author::class, $author);

    }
    /** @test */
    function it_should_fail_when_no_key()
    {

         $this->setExpectedException(\InvalidArgumentException::class);

         $author = new Author(
            'Anemail@foo.bar',
            '1234',
            'jhonny'

            );
    }



}
