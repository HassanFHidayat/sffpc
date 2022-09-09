<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('pembeli', function(User $user) {
            return $user->role === 'pembeli';
        });
        
        Gate::define('penjual', function(User $user) {
            return $user->role === 'penjual';
        });
        
        Gate::define('done', function(User $user) {
            return $user->done === 'false';
        });
    }
}
