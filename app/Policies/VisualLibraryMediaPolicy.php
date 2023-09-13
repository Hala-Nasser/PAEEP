<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\VisualLibraryMedia;
use Illuminate\Auth\Access\Response;

class VisualLibraryMediaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Admin $admin): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Admin $admin, VisualLibraryMedia $visualLibraryMedia): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Admin $admin): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Admin $admin, VisualLibraryMedia $visualLibraryMedia): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Admin $admin, VisualLibraryMedia $visualLibraryMedia): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Admin $admin, VisualLibraryMedia $visualLibraryMedia): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Admin $admin, VisualLibraryMedia $visualLibraryMedia): bool
    {
        //
    }
}
