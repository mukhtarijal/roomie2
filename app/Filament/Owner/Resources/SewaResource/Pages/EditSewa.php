<?php

namespace App\Filament\Owner\Resources\SewaResource\Pages;

use App\Filament\Owner\Resources\SewaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSewa extends EditRecord
{
    protected static string $resource = SewaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
