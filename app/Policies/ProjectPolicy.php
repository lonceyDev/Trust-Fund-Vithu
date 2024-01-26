<?php

namespace App\Policies;

use App\Models\Project;
use App\Models\User;

class ProjectPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        // if( $user->hasPermissionTo('view project')){
            
        //     return true;
        // }
        // return false;
        return $user->hasRole(['Admin','Manager']);

    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Project $project)
    {
        // if( $user->hasPermissionTo('view project')){

        //     return true;
        // }
        // return false;
        return $user->hasRole(['Admin','Manager']);
        
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        // if( $user->hasPermissionTo('create project')){
            
        //     return true;
        // }
        // return false;
        return $user->hasRole(['Admin','Manager']);

    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Project $project)
    {
        // if( $user->hasPermissionTo('update project')){
            
        //     return true;
        // }
        // return false;
        return $user->hasRole(['Admin']);

    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Project $project)
    {
        // if( $user->hasPermissionTo('delete project')){
            
        //     return true;
        // }
        // return false;
        return $user->hasRole(['Admin']);

    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Project $project)
    {
        // if( $user->hasPermissionTo('Restore Project')){
            
        //     return true;
        // }
        // return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Project $project)
    {
        //
    }
}
