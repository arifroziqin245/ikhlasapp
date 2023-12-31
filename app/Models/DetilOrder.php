<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetilOrder extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function order(){
        return $this->belongsTo('App\Models\Order', 'id_order');
    }
}
