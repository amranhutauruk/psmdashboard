<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductionResource\Pages;
use App\Filament\Resources\ProductionResource\RelationManagers;
use App\Models\Production;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductionResource extends Resource
{
    protected static ?string $model = Production::class;

   //  protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Produksi';
    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    public static function form(Form $form): Form
   {
      return $form
         ->schema([
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
               Tables\Columns\TextColumn::make('estate_1')
                  ->label('Estate 1 (%)'),
               Tables\Columns\TextColumn::make('estate_2')
                  ->label('Estate 2 (%)'),
               Tables\Columns\TextColumn::make('plasma')
                  ->label('Plasma (%)'),
               Tables\Columns\TextColumn::make('created_at')
                  ->label('Tanggal Input')
                  ->dateTime(),
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
            'index' => Pages\ListProductions::route('/'),
            'create' => Pages\CreateProduction::route('/create'),
            'edit' => Pages\EditProduction::route('/{record}/edit'),
        ];
    }
}
