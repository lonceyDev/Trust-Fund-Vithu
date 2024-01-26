<?php

namespace App\Policies;

use App\Models\Category;
use App\Models\User;

class CategoryPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        // if( $user->hasPermissionTo('View Category')){
            
        //     return true;
        // }
        // return false;
        return $user->hasRole(['Admin']);

    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Category $category)
    {
        // if( $user->hasPermissionTo('View Category')){
            
        //     return true;
        // }
        // return false;
        return $user->hasRole(['Admin']);

    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        // if( $user->hasPermissionTo('Create Category')){
            
        //     return true;
        // }
        // return false;
        return $user->hasRole(['Admin']);

    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Category $category)
    {
        // if( $user->hasPermissionTo('Update Category')){
            
        //     return true;
        // }
        // return false;
        return $user->hasRole(['Admin']);

    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Category $category)
    {
        // if( $user->hasPermissionTo('Delete Category')){
            
        //     return true;
        // }
        // return false;
        return $user->hasRole(['Admin']);

    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Category $category)
    {
        if( $user->hasPermissionTo('Restore Category')){
            
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Category $category)
    {
        //
    }
}
