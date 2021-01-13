<?php

namespace App\Providers;

use App\Models\tmdt\SaleOrders;
use App\Policies\SalesOrderPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        SaleOrders::class => SalesOrderPolicy::class,

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Passport::routes();

        Passport::personalAccessClientId(
            config('passport.personal_access_client.id')
        );

        Passport::personalAccessClientSecret(
            config('passport.personal_access_client.secret')
        );
        Gate::define('manager-users', function ($user) {
            return $user->hasAnyRoles(['admin', 'leader']);
        });

        Gate::define('edit-user', function ($user) {
            return $user->hasAnyRoles(['admin', 'leader']);
        });
        Gate::define('delete-user', function ($user) {
            return $user->hasAnyRoles(['admin', 'leader']);
        });
    }
}
