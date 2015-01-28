<?php
/**
 * Created by PhpStorm.
 * User: Антон
 * Date: 27.12.2014
 * Time: 0:48
 */
namespace CityClasses;
class Flat {
    public $num_rooms;
    public $area;
    public $floors;
    public $num_balcony;
    public $num_residents;
    public $heating_type;
    public $kvart_cost;
    public $fit;


    const for_metr = 11.50;
    const kub_cost = 5.50;


    public function __construct($x, $n, $f, $b, $r) {
        $this->area = $x;
        $this->num_rooms = $n;
        $this->floors = $f;
        $this->num_balcony = $b;
        $this->num_residents = $r;



    }
    function kvart() {
        $sum = $this->area * self::for_metr;

        return $sum;
    }
    function wat() {
        $kub = $this->num_residents * (self::kub_cost * 3);
        return $kub;
    }

    function heat($hh) {
        $langs = array ("air"=>1.4, "gas"=>2.3, "water"=>0.9);
        if ($hh==1) {

            $h = ($this->area * $langs["air"])+($this->num_balcony* $langs["air"]);}
        elseif ($hh==2) {

            $h = ($this->area * $langs["gas"])+ ($this->num_balcony* $langs["gas"]);}
        elseif ($hh==3) {
            $h = ($this->area * $langs["water"])+($this->num_balcony* $langs["air"]);}
        $fit=$h ;
        return $h;
    }

    function summ($hh) {
        $sum = $this->area * self::for_metr;
        $kub = $this->num_residents * (self::kub_cost * 3);
        $langs = array ("air"=>1.4, "gas"=>2.3, "water"=>0.9);
        if ($hh==1) {

            $h = ($this->area * $langs["air"])+($this->num_balcony* $langs["air"]);}
        elseif ($hh==2) {

            $h = ($this->area * $langs["gas"])+ ($this->num_balcony* $langs["gas"]);}
        elseif ($hh==3) {
            $h = ($this->area * $langs["water"])+($this->num_balcony* $langs["air"]);}
        $summ = $kub+$sum+$h;

        return $summ;
    }

    function people($what, $z) {
        if ($what=="-") {
            $this->num_residents=$this->num_residents-$z;
        }
        elseif ($what=="+") {
            $this->num_residents=$this->num_residents+$z;
        }
        return $this->num_residents;
    }
    function allInfo () {
        echo "<h2>Информация о квартире</h2>Площадь квартиры:  $this->area м.кв <br> Количество комнат: $this->num_rooms <br> Этаж:  $this->floors <br> Количество балконов: $this->num_balcony <br> ";

    }


}



