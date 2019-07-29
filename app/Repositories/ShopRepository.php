<?php


namespace App\Repositories;


use App\Models\Shop;
use App\Transformers\ShopTransformer;

class ShopRepository extends BaseRepository
{

    /**
     * Specify Eloquent Model class name
     *
     * @return string
     */
    public function modelClass()
    {
        return Shop::class;
    }

    public function transformerClass()
    {
        return ShopTransformer::class;
    }

}