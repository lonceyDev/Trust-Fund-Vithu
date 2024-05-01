<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        
        if( $user->hasPermissionTo('view user')){
            
            return true;
        }
        return false;
        //return $user->hasRole(['Super Admin','Admin','Manager']);


    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, User $model)
    {
        
        if( $user->hasPermissionTo('view user')){
            
            return true;
        }
        return false;
        //return $user->hasRole(['Super Admin','Admin','Manager']);

    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        
        if( $user->hasPermissionTo('create user')){
            
            return true;
        }
        return false;
        //return $user->hasRole('Super Admin','Admin');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, User $model)
    {
        if( $user->hasPermissionTo('update user')){
            
            return true;
        }
        return false;
        
        // return $user->hasRole('Super Admin','Admin');

    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, User $model)
    {
        
        if( $user->hasPermissionTo('delete user')){
            
            return true;
        }
        return false;
        // return $user->hasRole('Super Admin','Admin');

    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, User $model)
    {
        // return $user->hasRole('Super Admin','Admin');

   }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, User $model)
    {
        // return $user->hasRole('Super Admin');


    }
}
