<?php

namespace Welman91\ApiService\Tests\Fixtures\Resources\Product\Api\Handlers;

use Illuminate\Http\Request;
use Welman91\ApiService\Http\Handlers;
use Welman91\ApiService\Tests\Fixtures\Resources\Product\ProductResource;

class DeleteHandler extends Handlers
{
    public static ?string $uri = '/{id}';
    public static ?string $resource = ProductResource::class;

    public static function getMethod()
    {
        return Handlers::DELETE;
    }

    public static function getModel()
    {
        return static::$resource::getModel();
    }

    public function handler(Request $request, $id)
    {
        $model = static::getModel()::find($id);

        if (! $model) {
            return static::sendNotFoundResponse();
        }

        $model->delete();

        return static::sendSuccessResponse($model, 'Successfully Delete Resource');
    }
}
