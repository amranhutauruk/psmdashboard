<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LaporanBulananResource\Pages;
use App\Models\LaporanBulanan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class LaporanBulananResource extends Resource
{
    protected static ?string $model = LaporanBulanan::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Laporan Bulanan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('file')
                    ->label('Upload File PDF')
                    ->acceptedFileTypes(['application/pdf'])
                    ->required()
                    ->directory('laporan-bulanan') // Folder penyimpanan file
                    ->preserveFilenames(), // Mempertahankan nama file asli
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('file')->label('File PDF'),
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
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLaporanBulanan::route('/'),
            'create' => Pages\CreateLaporanBulanan::route('/create'),
            'edit' => Pages\EditLaporanBulanan::route('/{record}/edit'),
        ];
    }
}
