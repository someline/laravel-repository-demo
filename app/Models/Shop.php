<?php

namespace App\Models;

use App\Manager;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{

    public function manager()
    {
        return $this->belongsTo(Manager::class, 'id', 'shop_id');
    }

    public function managers()
    {
        return $this->hasMany(Manager::class, 'shop_id', 'id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'shop_id', 'id');
    }

}
