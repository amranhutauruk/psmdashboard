<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductionDataResource\Pages;
use App\Filament\Resources\ProductionDataResource\RelationManagers;
use App\Models\ProductionData;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductionDataResource extends Resource
{
    protected static ?string $model = ProductionData::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('year')
                    ->options([
                        '2022' => '2022',
                        '2023' => '2023',
                        '2024' => '2024',
                    ])
                    ->required(),
                Forms\Components\Repeater::make('data')
                    ->schema([
                        Forms\Components\TextInput::make('month')
                            ->label('Bulan')
                            ->required(),
                        Forms\Components\TextInput::make('value')
                            ->label('Jumlah Produksi')
                            ->numeric()
                            ->required(),
                    ])
                    ->columns(2)
                    ->orderable('month')
                    ->createItemButtonLabel('Tambah Data Bulanan')
                    ->defaultItems(12),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('year')->label('Tahun'),
            Tables\Columns\TextColumn::make('data')->label('Data Produksi'),
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
            'index' => Pages\ListProductionData::route('/'),
            'create' => Pages\CreateProductionData::route('/create'),
            'edit' => Pages\EditProductionData::route('/{record}/edit'),
        ];
    }
}
