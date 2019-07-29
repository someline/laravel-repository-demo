<?php


namespace App\Transformers;


use App\Models\Shop;
use App\Product;
use Illuminate\Database\Eloquent\Model;
use Someline\Repository\Transformers\BaseTransformer;

class ProductTransformer extends BaseTransformer
{

    protected $availableIncludes = [
        'products', 'managers', 'country',
    ];

    public function transform(Product $model)
    {
        return [
            'id' => $model->id,
            'name' => $model->name,
            'shop_id' => $model->shop_id,
            'country_id' => $model->country_id,
            'level' => $model->level,
        ];
    }

}