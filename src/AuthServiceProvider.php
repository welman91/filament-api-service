<?php

namespace Welman91\ApiService;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Welman91\ApiService\Models\Token;
use Welman91\ApiService\Policies\TokenPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::policy(Token::class, TokenPolicy::class);
    }
}
