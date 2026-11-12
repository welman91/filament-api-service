<?php

namespace Welman91\ApiService\Tests\Fixtures\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Welman91\ApiService\Tests\Fixtures\Models\Product;
use Welman91\ApiService\Tests\Fixtures\Policies\ProductPolicy;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Product::class => ProductPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
