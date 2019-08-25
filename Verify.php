<?php

require "Register.php";
require "trait.php";
class Verify extends Register
{

    private $email;
    private $pwd;
    protected $data = [
                       array("id" => 1, "email" => "jack@yahoo.fr", "pwd" => "97jack"),
                       array("id" => 2, "email" => "tes@yahoo.fr", "pwd" => "123test")
                      ];

    use test;

    public function __construct($email, $pwd)
    {
        $this->email = $email;
        $this->pwd = $pwd;
    }

    public function message(){

        foreach ($this->data as $user){

            if((in_array($this->email, $user, $strict = true) == true) && (in_array($this->pwd, $user, $strict = true) == true) ){

                $msg = "Your are connected";
                break;

            }else{

                $msg = "Email or Password is incorrect";
                continue;
            }
        }
        return $msg;
    }


}