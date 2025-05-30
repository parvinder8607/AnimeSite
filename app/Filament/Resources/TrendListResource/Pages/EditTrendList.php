<?php

namespace App\Filament\Resources\TrendListResource\Pages;

use App\Filament\Resources\TrendListResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTrendList extends EditRecord
{
    protected static string $resource = TrendListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
