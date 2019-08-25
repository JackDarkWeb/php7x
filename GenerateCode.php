<?php


class GenerateCode
{
    private $alpha, $num,
            $nbr, $ch;

    function alphaCode($len, $min, $max)
    {
        for ($i = 0; $i < $len; $i++) {
            $this->nbr = rand($min, $max);
            $this->alpha .= chr($this->nbr);
        }
        return $this->alpha;
    }

    function numCode($len, $min, $max)
    {
        for ($i = 0; $i < $len; $i++) {
            $this->nbr = rand($min, $max);
            $this->num .= $this->nbr;
        }
        return $this->num;
    }

    function alphaNumCode($len){

        for($i = 0; $i < $len; $i++){
            $this->nbr = rand(0, 9);
            $this->ch .= $this->nbr;
            $this->ch .= chr(rand(65, 90));
        }
        return $this->ch;
    }
}