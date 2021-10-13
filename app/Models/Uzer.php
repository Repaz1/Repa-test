<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Uzer extends Human
{

    protected $acc;
    protected $pwd;
    protected $phone;


    public function getAcc(){

        return $this->acc;
   }
    public function setAcc($acc){

        $this->acc = $acc;
   }
   public function getPwd(){

    return $this->pwd;
}
public function setPwd($pwd){

    $this->pwd = $pwd;
}
public function getPhone(){

    return $this->phone;
}
public function setPhone($phone){

    $this->phone = $phone;
}
}




