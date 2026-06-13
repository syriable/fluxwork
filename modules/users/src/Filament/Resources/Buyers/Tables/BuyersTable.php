<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Buyers\Tables;

use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Modules\Users\Filament\Resources\Admins\AdminResource;
use Modules\Users\Filament\Resources\Buyers\BuyerResource;
use Modules\Users\Filament\Resources\Components;
use Modules\Users\Models\Admin;
use Modules\Users\Models\Buyer;
use Syriable\Filament\Plugins\Activitylog\Filament\Actions\ActivitylogTimelineAction;
use Syriable\Filament\Plugins\Activitylog\Filament\Infolists\Components\ActivitylogTimeline;

class BuyersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn (Builder $query) => $query->with('roles'))
            ->columns([
                Components\Table\DisplayName::make(),
                Components\Table\Email::make(),
                Components\Table\AccountState::make(),
                Components\Table\Roles::make(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ActionGroup::make([
                    EditAction::make(),
                    ActivitylogTimelineAction::make()
                        ->modifyActivitylogTimelineUsing(fn (ActivitylogTimeline $activitylogTimeline) => $activitylogTimeline
                            ->causerUrl(fn ($causer): ?string => match (true) {
                                $causer instanceof Admin => AdminResource::getUrl('edit', ['record' => $causer]),
                                $causer instanceof Buyer => BuyerResource::getUrl('edit', ['record' => $causer]),
                                default => null,
                            })
                            ->causerNames([
                                null => 'System',
                                Buyer::class => fn ($causer): string => $causer->name,
                                Admin::class => fn ($causer): string => $causer->name,
                            ])
                            ->modelLabels([
                                null => 'System',
                                Buyer::class => BuyerResource::getModelLabel(),
                                Admin::class => AdminResource::getModelLabel(),
                            ])
                        ),
                ]),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
