<?php

namespace App\Policies;

use App\Models\Abou;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AbouPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Abou  $abou
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Abou $abou)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array($user->role_id, [1,2]);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Abou  $abou
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Abou $abou)
    {
        return in_array($user->role_id, [1,2]);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Abou  $abou
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Abou $abou)
    {
        return in_array($user->role_id, [1,2]);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Abou  $abou
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Abou $abou)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Abou  $abou
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Abou $abou)
    {
        //
    }
}
