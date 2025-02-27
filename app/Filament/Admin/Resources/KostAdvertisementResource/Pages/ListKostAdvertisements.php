<?php

namespace App\Filament\Admin\Resources\KostAdvertisementResource\Pages;

use App\Filament\Admin\Resources\KostAdvertisementResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKostAdvertisements extends ListRecords
{
    protected static string $resource = KostAdvertisementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
