<?php

namespace App\Filament\Resources\PeminjamanResource\Pages;

use App\Filament\Resources\PeminjamanResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Actions;

class EditPeminjaman extends EditRecord
{
    protected static string $resource = PeminjamanResource::class;

        protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
