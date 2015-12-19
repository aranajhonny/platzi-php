<?php 
namespace PlatziPHP;

class Author extends User{

	public function getLastName(){
		return $this->lastName;
	}

}
