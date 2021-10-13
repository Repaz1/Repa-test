<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Human extends Model
{

    protected $table = 'peoples';
    protected $primaryKey = 'peoples';
    public $incrementing = 'peoples';
    public $timestamps = 'peoples';

    protected $name;
    protected $gender;
    protected $age;
    protected $weight;
    protected $height;

    public function getName(){

        return $this->name;
   }
    public function setName($name){

        $this->name = $name;
    }

    public function getGender(){

        return $this->gender;
   }
    public function setGender($gender){

        $this->gender = $gender;
   }
    public function getAge(){

        return $this->age;
}
    public function setAge($age){

        $this->age = $age;
}
    public function getWeight(){

        return $this->weight;
}
    public function setWeight($weight){

         $this->weight = $weight;
}
    public function getHeight(){

        return $this->height;
}
    public function setHeight($height){

        $this->height = $height;
}


}
