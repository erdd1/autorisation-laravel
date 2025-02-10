<?php

namespace App\Providers;

use App\Policies\PostPolicy;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;

//use Illuminate\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    /*protected $policies = [
        Post::class => PostPolicy::class,
        //'App\Models\Post' => 'App\Policies\PostPolicy',
    ];*/

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('access-cy-labs',function ($user){
            return $user->roles->contains('nom','Admin');
        });

        //
    }
}
