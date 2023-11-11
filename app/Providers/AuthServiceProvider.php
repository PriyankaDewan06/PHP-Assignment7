<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Post::class => PostPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        /**
         * 1. create_post
         * 2. edit_post
         * 3. delete_post
         */

        // Gate::define('create_post', function(){
        //     return Auth::user()->is_admin;
        // });

        // Gate::define('edit_post', function(){
        //     return Auth::user()->is_admin;
        // });

        // Gate::define('delete_post', function(){
        //     return Auth::user()->is_admin;
        // });

        
    }
}
