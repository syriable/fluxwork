<?php

declare(strict_types=1);

namespace Modules\Users\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;
use Modules\Users\Models\Buyer;

class BuyerPolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        return filament()->isServing()
            ? $authUser->can('ViewAny:Buyer')
            : $authUser->can('ViewAny:Buyer');
    }

    public function view(AuthUser $authUser, Buyer $buyer): bool
    {
        return filament()->isServing()
            ? $authUser->can('View:Buyer')
            : $authUser->can('View:Buyer') && $authUser->is($buyer);
    }

    public function create(AuthUser $authUser): bool
    {
        return filament()->isServing()
            ? $authUser->can('Create:Buyer')
            : $authUser->can('Create:Buyer');
    }

    public function update(AuthUser $authUser, Buyer $buyer): bool
    {
        return filament()->isServing()
            ? $authUser->can('Update:Buyer')
            : $authUser->can('Update:Buyer') && $authUser->is($buyer);
    }

    public function delete(AuthUser $authUser, Buyer $buyer): bool
    {
        return filament()->isServing()
            ? $authUser->can('Delete:Buyer')
            : $authUser->can('Delete:Buyer') && $authUser->is($buyer);
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return filament()->isServing()
            ? $authUser->can('DeleteAny:Buyer')
            : $authUser->can('DeleteAny:Buyer');
    }

    public function restore(AuthUser $authUser, Buyer $buyer): bool
    {
        return filament()->isServing()
            ? $authUser->can('Restore:Buyer')
            : $authUser->can('Restore:Buyer') && $authUser->is($buyer);
    }

    public function forceDelete(AuthUser $authUser, Buyer $buyer): bool
    {
        return filament()->isServing()
            ? $authUser->can('ForceDelete:Buyer')
            : $authUser->can('ForceDelete:Buyer') && $authUser->is($buyer);
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return filament()->isServing()
            ? $authUser->can('ForceDeleteAny:Buyer')
            : $authUser->can('ForceDeleteAny:Buyer');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return filament()->isServing()
            ? $authUser->can('RestoreAny:Buyer')
            : $authUser->can('RestoreAny:Buyer');
    }

    public function replicate(AuthUser $authUser, Buyer $buyer): bool
    {
        return filament()->isServing()
            ? $authUser->can('Replicate:Buyer')
            : $authUser->can('Replicate:Buyer') && $authUser->is($buyer);
    }

    public function reorder(AuthUser $authUser): bool
    {
        return filament()->isServing()
            ? $authUser->can('Reorder:Buyer')
            : $authUser->can('Reorder:Buyer');
    }
}
