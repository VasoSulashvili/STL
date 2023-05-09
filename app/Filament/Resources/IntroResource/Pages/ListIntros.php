<?php

namespace App\Filament\Resources\IntroResource\Pages;

use App\Filament\Resources\IntroResource;
use App\Models\Intro;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIntros extends ListRecords
{
    protected static string $resource = IntroResource::class;

    protected function getActions(): array
    {
        if(!Intro::exists())
        {
            return [
                Actions\CreateAction::make(),
            ];
        }
        return [];
    }
}
