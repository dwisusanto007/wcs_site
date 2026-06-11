<?php

namespace App\Filament\Resources\AlliancePartnerResource\Pages;

use App\Filament\Resources\AlliancePartnerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAlliancePartner extends EditRecord
{
    protected static string $resource = AlliancePartnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
