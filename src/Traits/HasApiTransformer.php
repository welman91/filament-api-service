<?php

namespace Welman91\ApiService\Traits;

use Welman91\ApiService\Transformers\DefaultTransformer;

trait HasApiTransformer
{
    public static ?string $transformer = DefaultTransformer::class;

    public static function getApiTransformer()
    {
        return static::$transformer;
    }
}
