<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use App\Models\LaporanProduksiEstate1;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LaporanProduksiEstate1Resource\Pages;
use App\Filament\Resources\LaporanProduksiEstate1Resource\RelationManagers;

class LaporanProduksiEstate1Resource extends Resource
{
    protected static ?string $model = LaporanProduksiEstate1::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
         ->schema([
            Forms\Components\Select::make('year')
               ->label('Tahun')
               ->options([
                  now()->year => now()->year,
                  now()->year - 1 => now()->year - 1,
                  now()->year - 2 => now()->year - 2,
               ])
               ->required(),
            Forms\Components\Select::make('month')
               ->label('Bulan')
               ->options([
                  'Jan' => 'Januari',
                  'Feb' => 'Februari',
                  'Mar' => 'Maret',
                  'Apr' => 'April',
                  'Mei' => 'Mei',
                  'Jun' => 'Juni',
                  'Jul' => 'Juli',
                  'Aug' => 'Agustus',
                  'Sep' => 'September',
                  'Oct' => 'Oktober',
                  'Nov' => 'November',
                  'Dec' => 'Desember',
               ])
               ->required(),
            Forms\Components\TextInput::make('budget')
               ->label('Budget')
               ->numeric()
               ->required(),
            Forms\Components\TextInput::make('realisasi')
               ->label('Realisasi s/d Bulan Ini')
               ->numeric()
               ->required(),
            Forms\Components\TextInput::make('ton_ha')
               ->label('Realisasi Ton/Ha')
               ->numeric()
               ->required(),
            Forms\Components\TextInput::make('persen')
               ->label('Persen')
               ->numeric()
               ->required(),
      ]);
    }

    public static function table(Table $table): Table
    {
        return $table
               ->columns([
                  Tables\Columns\TextColumn::make('year')
                     ->label('Tahun')
                     ->sortable(),
                  Tables\Columns\TextColumn::make('month')
                     ->label('Bulan'),
                  Tables\Columns\TextColumn::make('budget')
                     ->label('Budget'),
                  Tables\Columns\TextColumn::make('realisasi')
                     ->label('Realisasi s/d Bulan Ini'),
                  Tables\Columns\TextColumn::make('ton_ha')
                     ->label('Realisasi Ton/Ha'),
                  Tables\Columns\TextColumn::make('persen')
                     ->label('Persen'),
            ])
            ->filters([
                  Tables\Filters\SelectFilter::make('year')
                     ->label('Filter Tahun')
                     ->options([
                        now()->year => now()->year,
                        now()->year - 1 => now()->year - 1,
                        now()->year - 2 => now()->year - 2,
                     ]),
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
            'index' => Pages\ListLaporanProduksiEstate1s::route('/'),
            'create' => Pages\CreateLaporanProduksiEstate1::route('/create'),
            'edit' => Pages\EditLaporanProduksiEstate1::route('/{record}/edit'),
        ];
    }
}
