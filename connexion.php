<?php
require "Verify.php";

$path = realpath('Books.php');
require $path;

$login = new Verify("jack@yahoo.fr", "123test");
$login->rappel();
echo $login->message();
echo "<hr>";
$test = new Books;
$test->deleteFiles("votes.txt", "db.txt");


