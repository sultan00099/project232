<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Feedback extends Model
{
    protected $fillable = ['customer_id', 'message', 'image'];
    public function customer(){
        return $this -> belongsTo(Customer::class);
    }
}
