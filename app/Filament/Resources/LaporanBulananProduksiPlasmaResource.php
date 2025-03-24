<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LaporanBulananProduksiPlasmaResource\Pages;
use App\Filament\Resources\LaporanBulananProduksiPlasmaResource\RelationManagers;
use App\Models\LaporanBulananProduksiPlasma;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LaporanBulananProduksiPlasmaResource extends Resource
{
    protected static ?string $model = LaporanBulananProduksiPlasma::class;

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
                  ->label('Realisasi Bulan Ini'),
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
            'index' => Pages\ListLaporanBulananProduksiPlasmas::route('/'),
            'create' => Pages\CreateLaporanBulananProduksiPlasma::route('/create'),
            'edit' => Pages\EditLaporanBulananProduksiPlasma::route('/{record}/edit'),
        ];
    }
}
