<?php
/**
 * Created by PhpStorm.
 * User: Антон
 * Date: 27.12.2014
 * Time: 0:53
 */



namespace CityClasses;
class House {
    public $housnum;
    public $floorsnum;
    public $porchnum;

    public $neararea;
    const light_floor = 10;
    const rent_money = 5;
    public $flats;


    public function __construct($hn, $fn, $pn, $na, $flats= array()) {
        $this->housnum = $hn;
        $this->floorsnum = $fn;
        $this->porchnum = $pn;
        $this->neararea = $na;
        $this->flats = $flats;

    }


    public function summKomun () {
       // $flats_in=  $this->floorsnum * 4 * $this->porchnum;
        $all_flatcost=( $this->floorsnum*1*$this->porchnum*$this->flats['fl4'])+
            ( $this->floorsnum*1*$this->porchnum*$this->flats['fl3'])+
            (( $this->floorsnum*2*$this->porchnum-3)*$this->flats['fl2'])+
            (3*$this->flats['fl1']);
        return $all_flatcost;

}
    public function peopleIn () {

        $allter=$this->floorsnum*11;
        return $allter;

    }
    public function porchElectric () {
       $elect=$this->floorsnum*$this->porchnum*self::light_floor;
        return $elect;

    }

    public function rentMon () {
        $rental=$this->neararea*self::rent_money;
        return $rental;

    }
   public function getInfo () {
       return "<h2>Информация о доме:</h2>Номер дома:".$this->housnum
       ."<br>Количество этажей: ".$this->floorsnum
       ."<br>Количество подъездов: ".$this->porchnum
       ."<br>Территория под дом:".$this->neararea;


   }
}
?>
