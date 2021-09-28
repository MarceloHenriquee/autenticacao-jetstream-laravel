<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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

        Gate::define('realizar-vendas', function (User $user) {
        /* Verifica se usuario logado possui a regra de vendedor   
        * Se sim, verifica se tem permissão de realizar vendas
        */
        $user_permissions = $user->load('roles.permissions')->roles->transform(function ($role) {
            return $role->permissions->transform(function ($permission) {
                return $permission->name;
            });
        });
          return in_array('realizar_vendas', $user_permissions->first()->toArray());
        });
    }
}
