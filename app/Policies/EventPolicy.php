<?php

namespace App\Policies;

use App\Models\Event;
use App\Models\User;

class EventPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        if( $user->hasPermissionTo('view event')){
            
            return true;
        }
        return false;
      //  return $user->hasRole(['Admin','Manager']);

    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Event $event)
    {
        if( $user->hasPermissionTo('view event')){
            
            return true;
        }
        return false;
        //return $user->hasRole(['Admin','Manager']);

    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        if( $user->hasPermissionTo('create event')){
            
            return true;
        }
        return false;
        //return $user->hasRole(['Admin','Manager']);

    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Event $event)
    {
        if( $user->hasPermissionTo('update event')){
            
            return true;
        }
        return false;
       // return $user->hasRole(['Admin']);

    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Event $event)
    {
        if( $user->hasPermissionTo('delete event')){
            
            return true;
        }
        return false;
       // return $user->hasRole(['Admin']);

    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Event $event)
    {
        // if( $user->hasPermissionTo('Restore Event')){
            
        //     return true;
        // }
        // return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Event $event)
    {
        //
    }
}
