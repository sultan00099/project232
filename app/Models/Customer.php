<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'email'];

    public static function findOrCreate($id){
        $cust = static::find($id);
        return $cust ?: new static;
    }
}
