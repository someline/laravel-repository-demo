<?php


namespace App\Transformers;


use App\Manager;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Model;
use Someline\Repository\Transformers\BaseTransformer;

class ManagerTransformer extends BaseTransformer
{

    protected $availableIncludes = [
        'products', 'managers',
    ];

    public function transform(Manager $model)
    {
        return [
            'id' => $model->id,
            'name' => $model->name,
            'shop_id' => $model->shop_id,
            'level' => $model->level,
        ];
    }

}