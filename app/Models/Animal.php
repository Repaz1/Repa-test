<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{

    public $paws;
    public $heigh;
    public $weight;
    public $color;

    public function getSpeed(){

        return $this->heigh*$this->paws/$this->weight*5;
    }



}

//public function getBoys(){

  //  return $this->boys;
//}

//public function setBoys($boys){

 //   $this->boys = $boys;

//} public function getGirls(){

 //   return $this->girls;
//}

//public function setGirls($girls){
