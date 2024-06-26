<?php

namespace App\Policies;

use App\Models\User;
use Spatie\Permission\Models\Role;

class RolePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        
        if( $user->hasPermissionTo('view role')){
            
            return true;
        }
        return false;
        //return $user->hasRole('Admin');

    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Role $role)
    {
        
        if( $user->hasPermissionTo('view role')){
            
            return true;
        }
        return false;
        //return $user->hasRole('Admin');
        
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        
        if( $user->hasPermissionTo('create role')){
            
            return true;
        }
        return false;
        //return $user->hasRole('Admin');
        
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Role $role)
    {
       
        if( $user->hasPermissionTo('update role')){
            
            return true;
        }
        return false;
        // return $user->hasRole('Admin');
        
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Role $role)
    {
       
        if( $user->hasPermissionTo('delete role')){
            
            return true;
        }
        return false;
        // return $user->hasRole('Admin');
        
    }

}
