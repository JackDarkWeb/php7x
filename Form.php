<?php


class Form
{
    function input($type, $name, $holder){
        return "<input type='$type' name='$name' placeholder='$holder' />";
    }
    function textarea($name, $holder){
        return "<textarea name='$name' placeholder='$holder'></textarea>";
    }
    function button($name, $value){
        return "<button name='$name'>$value</button>";
    }
}