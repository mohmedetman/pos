<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Order;
class Client extends Model
{
    use HasFactory;
    public $guarded = [];



    protected $casts = [
        'phone' => 'array',
    ];
    // public function orders()
    // {
    //     return $this->belongsToMany(Order::class,'client_id');
    // }
    public function orders()
    {
        return $this->hasMany(Order::class,'client_id');
    }
}
