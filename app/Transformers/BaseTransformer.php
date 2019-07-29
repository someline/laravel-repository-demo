<?php


namespace App\Transformers;

use Someline\Repository\Transformers\BaseTransformer as SomelineBaseTransformer;


class BaseTransformer extends SomelineBaseTransformer
{

    protected $autoToArrayTransformer = false;

    protected $availableTransformers = [
        'product' => ProductTransformer::class,
//        'products' => ProductTransformer::class,
        'manager' => ManagerTransformer::class,
    ];

}