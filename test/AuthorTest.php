<?php  

use PlatziPHP\Author;

class AuthorTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    function it_should_construct()
    {

        $author = new \PlatziPHP\Domain\Author(
            'Anemail@foo.bar',
            '1234',
            'Authordeplatzi'

            );

        $this->assertInstanceOf(\PlatziPHP\Domain\Author::class, $author);

    }
    /** @test */
    function it_should_fail_when_no_key()
    {

         $this->setExpectedException(\InvalidArgumentException::class);

         $author = new PlatziPHP\Domain\Author(
            'Anemail@foo.bar',
            '1234',
            'jhonny'

            );
    }



}
