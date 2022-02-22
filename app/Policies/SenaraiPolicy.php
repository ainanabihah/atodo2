<?php

namespace App\Policies;

use App\Models\Senarai;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class SenaraiPolicy
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
     * @param  \App\Models\Senarai  $senarai
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Senarai $senarai)
    {
        //method1
        if($user->id === $senarai->user_id){
            return true;
        } else {
            return Response::deny('You are not the owner');
        }

        //method2 (in single line)
        // return $user->id === $senarai->user_id
        // ? Response::allow()
        // : Response::deny('You are not the owner');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Senarai  $senarai
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Senarai $senarai)
    {
        //boleh kopipes dari view atau
        $this->view($user, $senarai);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Senarai  $senarai
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Senarai $senarai)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Senarai  $senarai
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Senarai $senarai)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Senarai  $senarai
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Senarai $senarai)
    {
        //
    }
}
