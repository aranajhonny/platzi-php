<?php  

use PlatziPHP\Email;

class EmailTest extends PHPunit_Framework_TestCase
{
    function test_email_is_valid()
    {


        $email = new PlatziPHP\Domain\Email('jhonnyarana@gmail.com');

        $this->assertInstanceOf(
            PlatziPHP\Domain\Email::class,
                $email
            );
    }

    function test_email_is_invalid()
    {

            $this->setExpectedException(

                \InvalidArgumentException::class
            
                );

            $email = new PlatziPHP\Domain\Email('estonoewsunemail');
    }


}
