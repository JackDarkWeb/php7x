<?php
function getInstance(){
    include 'myparam.inc.php';

    $db = new mysqli(host, user, password, dbname, port);
    if(!$db){
        echo "<script>";
        echo "alert('Connexion impossible to the dbname ')";
        echo "</script>";
        exit();
    }
    return $db;
}