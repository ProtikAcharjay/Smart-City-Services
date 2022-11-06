<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reqservice extends Model
{
    use HasFactory;
    protected $primaryKey = 'req_id';
    function customer(){
            return $this->hasMany(Customer::class, 'c_id','req_id');

    }
}
