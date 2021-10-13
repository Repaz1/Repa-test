<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property int $age
 * @property Carbon $reg_date
 * @property string $email
 * @property string $password
 * @property Carbon $reserv_date
 *
 */
class People extends Model
{
    public $table='peoples';
    public $timestamps=false;

    /***** mutators *****/
    public function getNameAttribute($value){
        return $value;
    }

    public function getAgeAttribute($value){
        return $value+10;
    }
    public function setRegDateAttribute($value){
        $duda = new Carbon($value);
        $this->attributes['reg_date'] = $duda->format('Y-m-d');

    }
    public function getRegDateAttribute($value){
        return new Carbon($value);
    }
    /***** mutators end *****/
}

