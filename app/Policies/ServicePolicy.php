<?php

namespace App\Policies;


use App\User;
use App\Service;
use Illuminate\Auth\Access\HandlesAuthorization;

class ServicePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function pass(User $user, Service $service)
    {
        return $user->id == $service->user_id;
    }
}
