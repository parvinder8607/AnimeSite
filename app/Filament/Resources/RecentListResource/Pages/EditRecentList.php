<?php

namespace App\Filament\Resources\RecentListResource\Pages;

use App\Filament\Resources\RecentListResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRecentList extends EditRecord
{
    protected static string $resource = RecentListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
