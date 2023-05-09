<?php

namespace App\Filament\Resources\IntroResource\Pages;

use App\Filament\Resources\IntroResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIntro extends EditRecord
{
    protected static string $resource = IntroResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
