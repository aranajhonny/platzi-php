<?php 
namespace PlatziPHP;

class Author extends User{

    public function __construct($email,$password,$key){

        parent::__construct($email, $password);

        if ($key != 'Authordeplatzi') {
            throw new \InvalidArgumentException("invalid key given.");
            
        }
    }

	public function getLastName(){
		return $this->lastName;
	}

}
