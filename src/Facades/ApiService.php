<?php

namespace Welman91\ApiService\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Welman91\ApiService\ApiService
 */
class ApiService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Welman91\ApiService\ApiService::class;
    }
}
