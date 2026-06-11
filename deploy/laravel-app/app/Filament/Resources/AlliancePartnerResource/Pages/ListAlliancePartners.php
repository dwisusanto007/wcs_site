<?php

namespace App\Filament\Resources\AlliancePartnerResource\Pages;

use App\Filament\Resources\AlliancePartnerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAlliancePartners extends ListRecords
{
    protected static string $resource = AlliancePartnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
