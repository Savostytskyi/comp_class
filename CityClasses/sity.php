<?php
/**
 * Created by PhpStorm.
 * User: Антон
 * Date: 28.12.2014
 * Time: 22:42
 */
namespace CityClasses;
class Sity
{
    public $cityname;
    public $year;
    public $country;
    public $mon;


    public function __construct($cn, $y, $c)
    {
        $this->cityname = $cn;
        $this->year = $y;
        $this->country = $c;
    }

    public function bigMoney()
    {
        $r = rand(100, 5000);
        $this->mon = $r;
        $mon = $r * 190;
        return $mon;
    }

    public function peopleOf($k)
    {
        $mont = $k * $this->mon;
        return $mont;
    }
	
    public function getInfo()
    {
        return "<h2>Информация о городе:</h2>Название города:" . $this->cityname
        . "<br>Год основания города: " . $this->year
        . "<br>Страна: " . $this->country;
    }
	
	public function inJSON(){
			$info = array("The City of"=>$this->cityname,"Year of foundation"=>$this->year, "Country"=>$this->country);
			return json_encode($info);
		}
}