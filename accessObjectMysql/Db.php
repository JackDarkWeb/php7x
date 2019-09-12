<?php


class Db
{
    private const host = '127.0.0.1';
    private const user = 'root';
    private const dbname = 'php7x';
    private const port = 3306;
    private const password = '';


    public function __construct()
    {
       $this->getInstance();
    }
    protected static function getInstance(){
        $db = new mysqli(self::host, self::user, self::password, self::dbname, self::port);
        if(!$db){
            echo "<script>";
            echo "alert('Connexion impossible to the dbname ')";
            echo "</script>";
            exit();
        }
        return $db;
    }

}