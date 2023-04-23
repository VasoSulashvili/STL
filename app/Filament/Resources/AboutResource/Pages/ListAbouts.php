<?php

namespace App\Filament\Resources\AboutResource\Pages;

use App\Filament\Resources\AboutResource;
use App\Models\About;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAbouts extends ListRecords
{
    protected static string $resource = AboutResource::class;

    protected function getActions(): array
    {
        if(!About::exists())
        {
            return [
                Actions\CreateAction::make(),
            ];
        }
        return [];
    }
}
