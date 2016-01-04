<?php
namespace PlatziPHP;
/**
 *
 */

class User {
   /**
    * @type string
    */
    protected $email;
    /**
      * @type string
      */
    protected $password;
    /**
    * @type string
    */
    protected $firstName;
    /**
    * @type string
    */
    protected $lastName;

    public function __construct($email, $password){

        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }   

    public function setName($firstName, $lastName){

        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFirstName(){
        return $this->firstName;
    }
}
