<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $primaryKey = 'c_id';
    function reqservice(){
        return $this->hasMany(Reqservice::class, 'c_id','c_id');

}
}
