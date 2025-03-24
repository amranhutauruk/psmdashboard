<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BudgetPlasmaResource\Pages;
use App\Filament\Resources\BudgetPlasmaResource\RelationManagers;
use App\Models\BudgetPlasma;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BudgetPlasmaResource extends Resource
{
    protected static ?string $model = BudgetPlasma::class;

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
         Forms\Components\TextInput::make('budget_satu_tahun')
            ->label('Budget')
            ->numeric()
            ->required(),
         Forms\Components\TextInput::make('ton_ha')
            ->label('BUdget Ton/Ha')
            ->numeric()
            ->required(),
         Forms\Components\TextInput::make('persen')
            ->label('Persen')
            ->numeric()
            ->required(),
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
            'index' => Pages\ListBudgetPlasmas::route('/'),
            'create' => Pages\CreateBudgetPlasma::route('/create'),
            'edit' => Pages\EditBudgetPlasma::route('/{record}/edit'),
        ];
    }
}
