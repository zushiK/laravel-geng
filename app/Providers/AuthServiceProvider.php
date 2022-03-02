<?php

namespace App\Providers;

use App\Providers\UserProvider\EccubeUserProvider;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // ECcube認証登録
        Auth::provider('eccube', function ($app, array $config) {
            dd($app);
            return new EccubeUserProvider($app['hash'], $config['model']);
        });
    }
}
