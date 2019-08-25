<?php


class ValidateStringCharacter
{
    function validName($string){
        $model = "/([a-zA-Z])+[^0-9]/";
    }
}