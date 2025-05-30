<?php

namespace App\Filament\Resources\PopuListResource\Pages;

use App\Filament\Resources\PopuListResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPopuLists extends ListRecords
{
    protected static string $resource = PopuListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
