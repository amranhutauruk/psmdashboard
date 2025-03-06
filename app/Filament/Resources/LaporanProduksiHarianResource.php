<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LaporanProduksiHarianResource\Pages;
use App\Filament\Resources\LaporanProduksiHarianResource\RelationManagers;
use App\Models\LaporanProduksiHarian;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LaporanProduksiHarianResource extends Resource
{
    protected static ?string $model = LaporanProduksiHarian::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Laporan Produksi Harian';
    protected static ?string $navigationGroup = 'Laporan Operasional';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               Forms\Components\FileUpload::make('file')
                  ->label('Upload File PDF')
                  ->acceptedFileTypes(['application/pdf'])
                  ->required()
                  ->directory('laporan-produksi-harian') // Folder penyimpanan file
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
            'index' => Pages\ListLaporanProduksiHarians::route('/'),
            'create' => Pages\CreateLaporanProduksiHarian::route('/create'),
            'edit' => Pages\EditLaporanProduksiHarian::route('/{record}/edit'),
        ];
    }
}
