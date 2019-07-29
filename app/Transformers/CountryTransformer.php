<?php


namespace App\Transformers;


use App\Models\Shop;
use App\Product;
use Illuminate\Database\Eloquent\Model;
use Someline\Repository\Transformers\BaseTransformer;

class CountryTransformer extends BaseTransformer
{

    protected $availableIncludes = [
//        'products', 'managers', 'manager',
    ];

    public function transform(Product $model)
    {
        return [
            'id' => $model->id,
            'name' => $model->name,
            'level' => $model->level,
        ];
    }

}