<?php


namespace App\Transformers;


use App\Models\Shop;
use Illuminate\Database\Eloquent\Model;

class ShopTransformer extends BaseTransformer
{

    protected $availableIncludes = [
        'products', 'managers', 'manager',
    ];

    public function transform(Shop $model)
    {
        return [
            'id' => $model->id,
            'name' => $model->name,
        ];
    }

}