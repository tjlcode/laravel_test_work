<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function show_user(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id;
    }
}
