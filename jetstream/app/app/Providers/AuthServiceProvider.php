<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use App\Models\Team;
use App\Policies\TeamPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Team::class => TeamPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('is_admin', function ($user) {
            return $user->profile=='administrator'
                        ? true
                        : false;
        });
        Gate::define('user', function ($user) {
            return $user->profile=='user'
                        ? true
                        : false;
        });
    }
}
