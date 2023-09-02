<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Client;

class Order extends Model
{
    use HasFactory;
    public $guarded = [];
    public function product()
    {
        return $this->belongsToMany(Product::class,'order_product')->withPivot('quantity');
    }
    public function client()
{
    return $this->belongsTo(Client::class);
}

}
