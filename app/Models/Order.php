<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function customers(){
        $this->belongsTo(Customer::class);
    }

    public function detil_order(){
        return $this->hasMany('App\Models\DetilOrder', 'id');
    }
}
