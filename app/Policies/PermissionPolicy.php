<?php

namespace App\Policies;


use App\Models\User;
use Illuminate\Auth\Access\Response;
use Spatie\Permission\Models\Permission;

class PermissionPolicy
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
     * Determine whether the user can create models.
     * 
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->hasAnyRole(['super-admin', 'admin']);
    }

    /**
     * Determine whether the user can update the model.
     * 
     * @param \App\Models\User $user
     * @param Spatie\Permission\Models\Permission
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Permission $permission)
    {
        return $user->hasAnyRole(['super-admin', 'admin']);
    }

    /**
     * Determine whether the user can delete the model.
     * @param \App\Models\User $user
     * @param Spatie\Permission\Models\Permission
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Permission $permission)
    {
        return $user->hasAnyRole(['super-admin', 'admin']);
    }
}
