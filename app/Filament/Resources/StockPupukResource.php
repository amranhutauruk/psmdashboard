<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StockPupukResource\Pages;
use App\Filament\Resources\StockPupukResource\RelationManagers;
use App\Models\StockPupuk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StockPupukResource extends Resource
{
    protected static ?string $model = StockPupuk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Stock Pupuk dan Agrochemical';
    protected static ?string $navigationGroup = 'Laporan Agronomi ';

    public static function form(Form $form): Form
    {
        return $form
         ->schema([
            Forms\Components\FileUpload::make('file')
               ->label('Upload File PDF')
               ->acceptedFileTypes(['application/pdf'])
               ->required()
               ->directory('stock-pupuk') // Folder penyimpanan file
               ->preserveFilenames() // Menampilkan nama file asli dari local
         ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                  TextColumn::make('id')->sortable(), // Perbaikan: Gunakan TextColumn yang benar
                  TextColumn::make('file')->label('File PDF'), // Perbaikan: Gunakan TextColumn yang benar
            ])
            ->filters([
                //
            ])
               ->actions([
                  Tables\Actions\EditAction::make(),
                  Tables\Actions\Action::make('view')
                     ->label('View PDF')
                     ->url(fn ($record) => asset('storage/' . $record->file))
                     ->openUrlInNewTab(),
                  Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListStockPupuks::route('/'),
            'create' => Pages\CreateStockPupuk::route('/create'),
            'edit' => Pages\EditStockPupuk::route('/{record}/edit'),
        ];
    }
}
