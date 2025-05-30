<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PopuListResource\Pages;
use App\Filament\Resources\PopuListResource\RelationManagers;
use App\Models\PopuList;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PopuListResource extends Resource
{
    protected static ?string $model = PopuList::class;

    protected static ?string $label = 'Popular List';


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
            'index' => Pages\ListPopuLists::route('/'),
            'create' => Pages\CreatePopuList::route('/create'),
            'edit' => Pages\EditPopuList::route('/{record}/edit'),
        ];
    }
}
