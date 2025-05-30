<?php

namespace App\Filament\Resources\TrendListResource\Pages;

use App\Filament\Resources\TrendListResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTrendLists extends ListRecords
{
    protected static string $resource = TrendListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
