<?php

namespace App\Policies;

use App\AboutUs;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AboutUsPolicy
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
    public function pass(User $user, AboutUs $aboutUs)
    {
        return $user->id == $aboutUs->user_id;
    }
}
