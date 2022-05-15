<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Policies\PostPolicy;
use App\Models\User;
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

        // Category

        Gate::define('category-list', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.list-category'));
        });

        Gate::define('category-add', function ($user) {
            return $user->checkPermissionAccess('category_add');
        });

        Gate::define('category-edit', function ($user) {
            return $user->checkPermissionAccess('category_edit');
        });

        Gate::define('category-delete', function ($user) {
            return $user->checkPermissionAccess('category_delete');
        });

        // Menu

        Gate::define('menu-list', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.list-menu'));
        });

        Gate::define('menu-add', function ($user) {
            return $user->checkPermissionAccess('menu_add');
        });

        Gate::define('menu-edit', function ($user) {
            return $user->checkPermissionAccess('menu_edit');
        });

        Gate::define('menu-delete', function ($user) {
            return $user->checkPermissionAccess('menu_delete');
        });
        

        // Product
        Gate::define('product-list', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.list-product'));
        });

        Gate::define('product-add', function ($user) {
            return $user->checkPermissionAccess('product_add');
        });

        Gate::define('product-edit', function ($user) {
            return $user->checkPermissionAccess('product_edit');
        });

        Gate::define('product-delete', function ($user) {
            return $user->checkPermissionAccess('product_delete');
        });


        // Slider
        Gate::define('slider-list', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.list-slider'));
        });

        Gate::define('slider-add', function ($user) {
            return $user->checkPermissionAccess('slider_add');
        });

        Gate::define('slider-edit', function ($user) {
            return $user->checkPermissionAccess('slider_edit');
        });

        Gate::define('slider-delete', function ($user) {
            return $user->checkPermissionAccess('slider_delete');
        });

        // Settings

        Gate::define('settings-list', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.list-setting'));
        });

        Gate::define('settings-add', function ($user) {
            return $user->checkPermissionAccess('setting_add');
        });

        Gate::define('settings-edit', function ($user) {
            return $user->checkPermissionAccess('setting_edit');
        });

        Gate::define('settings-delete', function ($user) {
            return $user->checkPermissionAccess('setting_delete');
        });

        // Users

        Gate::define('users-list', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.list-user'));
        });

        Gate::define('users-add', function ($user) {
            return $user->checkPermissionAccess('user_add');
        });

        Gate::define('users-edit', function ($user) {
            return $user->checkPermissionAccess('user_edit');
        });

        Gate::define('users-delete', function ($user) {
            return $user->checkPermissionAccess('user_delete');
        });

        // Roles 

        Gate::define('roles-list', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.list-role'));
        });

        Gate::define('roles-add', function ($user) {
            return $user->checkPermissionAccess('role_add');
        });

        Gate::define('roles-edit', function ($user) {
            return $user->checkPermissionAccess('role_edit');
        });

    }

}
