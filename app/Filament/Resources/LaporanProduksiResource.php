<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LaporanProduksiResource\Pages;
use App\Filament\Resources\LaporanProduksiResource\RelationManagers;
use App\Models\LaporanProduksi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;

class LaporanProduksiResource extends Resource
{
    protected static ?string $model = LaporanProduksi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('estate_1')
                    ->label('Estate 1 (Ha)')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('estate_2')
                    ->label('Estate 2 (Ha)')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('plasma')
                    ->label('Plasma (Ha)')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('estate_1')->label('Estate 1 (Ha)'),
                TextColumn::make('estate_2')->label('Estate 2 (Ha)'),
                TextColumn::make('plasma')->label('Plasma (Ha)'),
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
            'index' => Pages\ListLaporanProduksis::route('/'),
            'create' => Pages\CreateLaporanProduksi::route('/create'),
            'edit' => Pages\EditLaporanProduksi::route('/{record}/edit'),
        ];
    }
}
