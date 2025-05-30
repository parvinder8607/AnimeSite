<?php

namespace App\Filament\Resources\BannTableResource\Pages;

use App\Filament\Resources\BannTableResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBannTables extends ListRecords
{
    protected static string $resource = BannTableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
