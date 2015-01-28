<?php
/**
 * Created by PhpStorm.
 * User: Антон
 * Date: 28.12.2014
 * Time: 18:26
 */
namespace CityClasses;

class Street {
    public $strname;
    public $howlong;
    public $startcordin;
    public $finishcordin;
    public $houses;
    public $kolhouses = array();

    public function __construct($sn, $hl, $sc, $fc, $house= array()) {
        $this->strname = $sn;
        $this->howlong = $hl;
        $this->startcordin = $sc;
        $this->finishcordin = $fc;
        $this->house = $house;
    }
    public function getInfost () {
        return "<h2>Информация об улице:</h2>Название улицы: ".$this->strname
        ."<br>Длинна улицы: ".$this->howlong." м.<br>";


    }

    public function numCleaners () {
        $r=rand(5, 25);
        $this->houses=$r*$this->startcordin;
        for ($k = 0; $k<$r; $k++) {
            $this->kolhouses[$k] = $this->house[rand(0,2)];
        }
     $s=(int)(array_sum($this->kolhouses)/5/400);
        echo "Cумма комунальных платежей со всех домов: ".$this->houses." грн.";
        return $s;
    }



}

