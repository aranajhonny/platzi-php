<?php  

class UserTest extends PHPUnit_Framework_TestCase{
    
    /** @test */
    function it_should_be_able_to_construct(){

        $user = new \PlatziPHP\User('jhonny@gmail.com', 'platzi');

        $this->assertInstanceOf(\PlatziPHP\User::class, $user);
    }
    /** @test */
    function it_shoul_have_a_first_name(){
        
        $user = new \PlatziPHP\User('jhonnyarana@gmail.com', '1234');  

        $user->setName('jhonny', 'arana');

        $name = $user->getFirstName();

        $this->assertEquals('jhonny', $name);
    }
}
