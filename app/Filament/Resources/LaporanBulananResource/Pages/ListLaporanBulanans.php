<?php

namespace App\Filament\Resources\LaporanBulananResource\Pages;

use App\Filament\Resources\LaporanBulananResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Contracts\View\View;

class ListLaporanBulanan extends ListRecords
{
    protected static string $resource = LaporanBulananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getTableContentFooter(): ?View
    {
        $selectedRecord = $this->getTable()->getSelectedRecord();

        if ($selectedRecord) {
            return view('filament.pdf-viewer', [
                'fileUrl' => asset('storage/' . $selectedRecord->file),
            ]);
        }

        return null;
    }
}
