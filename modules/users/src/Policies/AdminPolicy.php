<?php

declare(strict_types=1);

namespace Modules\Users\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;
use Modules\Users\Models\Admin;

class AdminPolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        return ! filament()->isServing()
            ? $authUser->can('ViewAny:Admin')
            : $authUser->can('ViewAny:Admin');
    }

    public function view(AuthUser $authUser, Admin $admin): bool
    {
        return ! filament()->isServing()
            ? $authUser->can('View:Admin') && $authUser->is($admin)
            : $authUser->can('View:Admin');
    }

    public function create(AuthUser $authUser): bool
    {
        return ! filament()->isServing()
            ? $authUser->can('Create:Admin')
            : $authUser->can('Create:Admin');
    }

    public function update(AuthUser $authUser, Admin $admin): bool
    {
        return ! filament()->isServing()
            ? $authUser->can('Update:Admin') && $authUser->is($admin)
            : $authUser->can('Update:Admin');
    }

    public function delete(AuthUser $authUser, Admin $admin): bool
    {
        return ! filament()->isServing()
            ? $authUser->can('Delete:Admin') && $authUser->is($admin)
            : $authUser->can('Delete:Admin');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return ! filament()->isServing()
            ? $authUser->can('DeleteAny:Admin')
            : $authUser->can('DeleteAny:Admin');
    }

    public function restore(AuthUser $authUser, Admin $admin): bool
    {
        return ! filament()->isServing()
            ? $authUser->can('Restore:Admin') && $authUser->is($admin)
            : $authUser->can('Restore:Admin');
    }

    public function forceDelete(AuthUser $authUser, Admin $admin): bool
    {
        return ! filament()->isServing()
            ? $authUser->can('ForceDelete:Admin') && $authUser->is($admin)
            : $authUser->can('ForceDelete:Admin');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return ! filament()->isServing()
            ? $authUser->can('ForceDeleteAny:Admin')
            : $authUser->can('ForceDeleteAny:Admin');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return ! filament()->isServing()
            ? $authUser->can('RestoreAny:Admin')
            : $authUser->can('RestoreAny:Admin');
    }

    public function replicate(AuthUser $authUser, Admin $admin): bool
    {
        return ! filament()->isServing()
            ? $authUser->can('Replicate:Admin') && $authUser->is($admin)
            : $authUser->can('Replicate:Admin');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return ! filament()->isServing()
            ? $authUser->can('Reorder:Admin')
            : $authUser->can('Reorder:Admin');
    }
}
