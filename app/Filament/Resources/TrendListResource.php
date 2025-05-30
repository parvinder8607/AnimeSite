<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TrendListResource\Pages;
use App\Filament\Resources\TrendListResource\Pages\CreateTrendList;
use App\Filament\Resources\TrendListResource\Pages\EditTrendList;
use App\Filament\Resources\TrendListResource\Pages\ListTrendLists;
use App\Filament\Resources\TrendListResource\RelationManagers;
use App\Models\trendlist;
use Filament\Actions\EditAction;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TrendListResource extends Resource
{
    protected static ?string $model = trendlist::class;

    protected static ?string $label = 'Trending List';

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
            'index' => Pages\ListTrendLists::route('/'),
            'create' => Pages\CreateTrendList::route('/create'),
            'edit' => Pages\EditTrendList::route('/{record}/edit'),
        ];
    }
}
