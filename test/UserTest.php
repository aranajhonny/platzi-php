<?php  

use PlatziPHP\Domain\User;

class UserTest extends PHPUnit_Framework_TestCase
{
    
    /** @test */
    function it_should_be_able_to_construct()
    {

        $user = new User('jhonny@gmail.com', 'platzi');

        $this->assertInstanceOf(\PlatziPHP\Domain\User::class, $user);
    }
    /** @test */
    function it_shoul_have_a_first_name()
    {
        
        $user = new User('jhonnyarana@gmail.com', '1234');  

        $user->setName('jhonny', 'arana');

        $name = $user->getFirstName();

        $this->assertEquals('jhonny', $name);
    }
}
