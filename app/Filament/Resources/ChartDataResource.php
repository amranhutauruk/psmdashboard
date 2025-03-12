<?php

namespace App\Filament\Resources;


use App\Filament\Resources\ChartDataResource\Pages;

use App\Filament\Resources\ChartDataResource\RelationManagers;
use App\Models\ChartData;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ChartDataResource extends Resource
{
   protected static ?string $model = ChartData::class;

   protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               Forms\Components\DatePicker::make('input_date')
                  ->label('Tanggal Input')
                  ->required(),
               Forms\Components\TextInput::make('estate_1')
                  ->label('Estate 1 (%)')
                  ->numeric()
                  ->required(),
               Forms\Components\TextInput::make('estate_2')
                  ->label('Estate 2 (%)')
                  ->numeric()
                  ->required(),
               Forms\Components\TextInput::make('plasma')
                  ->label('Plasma (%)')
                  ->numeric()
                  ->required(),
         ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                  Tables\Columns\TextColumn::make('input_date')
                     ->label('Tanggal Input')
                     ->date(),
                  Tables\Columns\TextColumn::make('estate_1')
                     ->label('Estate 1 (%)'),
                  Tables\Columns\TextColumn::make('estate_2')
                     ->label('Estate 2 (%)'),
                  Tables\Columns\TextColumn::make('plasma')
                     ->label('Plasma (%)'),
            ])
            ->filters([
                  Filter::make('input_date')
                     ->form([
                        Forms\Components\DatePicker::make('input_date')
                              ->label('Filter Berdasarkan Tanggal'),
                     ])
                     ->query(function (Builder $query, array $data): Builder {
                        return $query->when(
                              $data['input_date'],
                              fn (Builder $query, $date) => $query->whereDate('input_date', $date)
                        );
                     }),
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
            'index' => Pages\ListChartData::route('/'),
            'create' => Pages\CreateChartData::route('/create'),
            'edit' => Pages\EditChartData::route('/{record}/edit'),
        ];
    }
}
