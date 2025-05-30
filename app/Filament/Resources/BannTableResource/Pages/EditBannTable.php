<?php

namespace App\Filament\Resources\BannTableResource\Pages;

use App\Filament\Resources\BannTableResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBannTable extends EditRecord
{
    protected static string $resource = BannTableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
