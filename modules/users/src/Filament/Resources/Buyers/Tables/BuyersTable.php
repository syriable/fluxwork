<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Buyers\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Modules\Users\Filament\Resources\Admins\AdminResource;
use Modules\Users\Filament\Resources\Buyers\BuyerResource;
use Modules\Users\Models\Admin;
use Modules\Users\Models\Buyer;
use Syriable\Filament\Plugins\Activitylog\Filament\Actions\ActivitylogTimelineAction;
use Syriable\Filament\Plugins\Activitylog\Filament\Infolists\Components\ActivitylogTimeline;

class BuyersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                ActivitylogTimelineAction::make()
                    ->modifyActivitylogTimelineUsing(fn (ActivitylogTimeline $activitylogTimeline) => $activitylogTimeline
                        ->causerUrl(fn (?Model $causer): ?string => match (true) {
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
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
