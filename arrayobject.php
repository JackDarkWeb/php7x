<?php

$tab = ["user" => "Jack", "pwd" => "9709jn"];
$user = new ArrayObject($tab);

//var_dump($user);
//Lire les proprietes de l object ***

$user->setFlags(ArrayObject::ARRAY_AS_PROPS);

$username = ucfirst($_GET['user']);
$pwd = ($_GET['pwd']);

/**
 $uri = $_SERVER["REQUEST_URI"];
$dns = $_SERVER["HTTP_HOST"];

$string = $dns.$uri;
 **/

if($username == $user->user && $pwd == $user->pwd){

    // Completer vos information
    $user->offsetSet("phone", "97098482");
    $user->offsetSet("address", "Paris 75, France");

    if($user->offsetExists("phone") && $user->offsetExists("address")){

        echo "Vos informations sont : <br/> ";
        foreach ($user as $clef => $value){

            echo $clef," => ",$value,"<br/>";
        }
    }else{

        echo "Vos informations sont : <br/> ";
        foreach ($user as $clef => $value){

            echo $clef," => ",$value,"<br/>";
        }
    }

}else{

    echo "Username or password is incorrect";
}

