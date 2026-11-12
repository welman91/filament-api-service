<?php

namespace Welman91\ApiService\Tests\Fixtures\Resources\Product\Api\Handlers;

use Illuminate\Http\Request;
use Welman91\ApiService\Http\Handlers;
use Welman91\ApiService\Tests\Fixtures\Resources\Product\ProductResource;

class UpdateHandler extends Handlers
{
    public static ?string $uri = '/{id}';
    public static ?string $resource = ProductResource::class;

    public static function getMethod()
    {
        return Handlers::PUT;
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

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, 'Successfully Update Resource');
    }
}
