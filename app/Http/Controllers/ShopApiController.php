<?php


namespace App\Http\Controllers;


use App\Repositories\ShopRepository;
use Illuminate\Http\Request;
use Someline\Repository\Controllers\BaseApiController;

class ShopApiController extends BaseApiController
{

    public function __construct(ShopRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(Request $request)
    {
        $data = parent::index($request);
        return $data;
//        return view('welcome', compact('data'));
    }

}