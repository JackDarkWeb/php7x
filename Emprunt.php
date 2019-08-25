<?php


namespace heritage;

//require "Values.php";
class Emprunt extends Values
{
    private $rate;
    private $close;

    function __construct($name, $price, $rate, $close)
    {
        parent::__construct($name, $price);
        $this->rate = $rate;
        $this->close = $close;
    }

    public function getinfo()
    {
        $close = mktime(18, 00,00, 12,31, $this->close);
        $reste  = round(($close - time())/84600);
        $info  = "<h3>Emprunt $this->name au taux $this->rate %</h3>";
        $info .= parent::getinfo();
        $info .= "<h4>Echeance : dans $reste jours</h4>";

        return $info;
    }
}