<?php

namespace App\Filament\Resources\PopuListResource\Pages;

use App\Filament\Resources\PopuListResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPopuList extends EditRecord
{
    protected static string $resource = PopuListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
