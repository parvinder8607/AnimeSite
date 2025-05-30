<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannTableResource\Pages;
use App\Filament\Resources\BannTableResource\RelationManagers;
use App\Models\bannList;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BannTableResource extends Resource
{
    protected static ?string $model = bannList::class;

    protected static ?string $navigationLabel = 'Banner List';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('mal_id')
                ->required()
                ->columnSpanFull(),
            Forms\Components\TextInput::make('title')
                ->required()
                ->columnSpanFull(),
            Forms\Components\FileUpload::make('image_url')
                // ->required()
                ->columnSpanFull(),

            Forms\Components\Toggle::make('active')
                ->required()
                ->columnSpanFull(),
            ]);
        
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('mal_id'),
            Tables\Columns\TextColumn::make('title'),

            Tables\Columns\ImageColumn::make('image_url'),
            Tables\Columns\ToggleColumn::make('active'),
        ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBannTables::route('/'),
            'create' => Pages\CreateBannTable::route('/create'),
            'edit' => Pages\EditBannTable::route('/{record}/edit'),
        ];
    }
}
