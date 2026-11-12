<?php

namespace Welman91\ApiService\Tests\Fixtures\Resources\Product\Api;

use Welman91\ApiService\ApiService;
use Welman91\ApiService\Tests\Fixtures\Resources\Product\Api\Handlers\CreateHandler;
use Welman91\ApiService\Tests\Fixtures\Resources\Product\Api\Handlers\DeleteHandler;
use Welman91\ApiService\Tests\Fixtures\Resources\Product\Api\Handlers\DetailHandler;
use Welman91\ApiService\Tests\Fixtures\Resources\Product\Api\Handlers\PaginationHandler;
use Welman91\ApiService\Tests\Fixtures\Resources\Product\Api\Handlers\UpdateHandler;
use Welman91\ApiService\Tests\Fixtures\Resources\Product\ProductResource;

class ProductApiService extends ApiService
{
    protected static ?string $resource = ProductResource::class;
    protected static ?string $groupRouteName = 'our-products'; // customize route name

    public static function handlers(): array
    {

        return [
            CreateHandler::class,
            UpdateHandler::class,
            DeleteHandler::class,
            PaginationHandler::class,
            DetailHandler::class,
        ];
    }
}
