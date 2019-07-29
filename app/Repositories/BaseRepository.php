<?php


namespace App\Repositories;


use Someline\Repository\Rules\RequestRule;
use Someline\Repository\SomelineRepository;

abstract class BaseRepository extends SomelineRepository
{

    protected $useRequestRule = true;

    public function boot()
    {
        if ($this->useRequestRule) {
            $this->pushRuleViaClass(RequestRule::class);
        }
    }

}