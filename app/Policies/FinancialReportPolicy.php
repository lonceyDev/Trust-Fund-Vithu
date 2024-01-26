<?php

namespace App\Policies;

use App\Models\FinancialReport;
use App\Models\User;


class FinancialReportPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        // if( $user->hasPermissionTo('View Financial Report')){
            
        //     return true;
        // }
        // return false;
        return $user->hasRole(['Admin','Manager']);

    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, FinancialReport $financialReport)
    {
        // if( $user->hasPermissionTo('View Financial Report')){
            
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
        // if( $user->hasPermissionTo('Create Financial Report')){
            
        //     return true;
        // }
        // return false;
        return $user->hasRole(['Admin']);

    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, FinancialReport $financialReport)
    {
        // if( $user->hasPermissionTo('Update Financial Report')){
            
        //     return true;
        // }
        // return false;
        return $user->hasRole(['Admin']);

    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, FinancialReport $financialReport)
    {
        // if( $user->hasPermissionTo('Delete Financial Report')){
            
        //     return true;
        // }
        // return false;
        return $user->hasRole(['Admin']);

    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, FinancialReport $financialReport)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, FinancialReport $financialReport)
    {
        //
    }
}
