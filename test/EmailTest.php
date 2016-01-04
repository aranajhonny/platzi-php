<?php  

use PlatziPHP\Email;

class EmailTest extends PHPunit_Framework_TestCase
{
    function test_email_is_valid()
    {


        $email = new Email('jhonnyarana@gmail.com');

        $this->assertInstanceOf(
                Email::class,
                $email
            );
    }

    function test_email_is_invalid()
    {

            $this->setExpectedException(

                \InvalidArgumentException::class
            
                );

            $email = new Email('estonoewsunemail');
    }


}
