<?php

namespace App\Filament\Admin\Resources\HelpCenterResource\Pages;

use App\Filament\Admin\Resources\HelpCenterResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHelpCenters extends ListRecords
{
    protected static string $resource = HelpCenterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
