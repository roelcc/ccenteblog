<?php

namespace App\Providers;

use App\AboutUs;
use App\Policies\AboutUsPolicy;
use App\Post;
use App\Service;
use App\Policies\ServicePolicy;
use App\Policies\PostPolicy;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        Post::class => PostPolicy::class,
        Service::class => ServicePolicy::class,
        AboutUs::class => AboutUsPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
