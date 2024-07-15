<?php

namespace App\Policies;


use App\Models\Car;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CarPolicy
{
    /**
     * Determine whether the user can view the model.
     * 
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->hasAnyRole(['super-admin', 'admin', 'moderator']);
    }

    /**
     * Determine whether the user can view the model.
     * 
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Car $car)
    {
        return $user->hasAnyRole(['super-admin', 'admin', 'moderator']);
    }

    /**
     * Determine whether the user can view the model.
     * 
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->hasAnyRole(['super-admin', 'admin']);
    }

    /**
     * Determine whether the user can view the model.
     * 
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Car $car)
    {
        return $user->hasAnyRole(['super-admin', 'admin']);
    }

    /**
     * Determine whether the user can view the model.
     * 
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Car $car)
    {
        return $user->hasAnyRole(['super-admin', 'admin']);
    }

    /**
     * Determine whether the user can view the model.
     * 
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Car $car)
    {
        return $user->hasAnyRole(['super-admin', 'admin']);
    }
}
