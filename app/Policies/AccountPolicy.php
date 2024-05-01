<?php

namespace App\Policies;

use App\Models\Account;
use App\Models\User;

class AccountPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
       
        if( $user->hasPermissionTo('view account')){
            
            return true;
        }
        return false;
        // return $user->hasRole(['Admin','Manager']);
        
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Account $account)
    {
        if( $user->hasPermissionTo('view account')){
            
            return true;
        }
        return false;
        // return $user->hasRole(['Admin','Manager']);

    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        
        if( $user->hasPermissionTo('create account')){
            
            return true;
        }
        return false;
        // return $user->hasRole(['Admin','Manager']);

    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Account $account)
    {
       
        if( $user->hasPermissionTo('update account')){
            
            return true;
        }
        return false;
        //return $user->hasRole(['Admin']);

    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Account $account)
    {
        
        if( $user->hasPermissionTo('delete account')){
            
            return true;
        }
        return false;
        //return $user->hasRole(['Admin']);

    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Account $account)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Account $account)
    {
        //
    }
}
