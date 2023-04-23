<?php

namespace App\Filament\Resources\PersonResource\Pages;

use App\Filament\Resources\PersonResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\Person;

class EditPerson extends EditRecord
{
    protected static string $resource = PersonResource::class;

    public Person $person;

    protected function getFormModel(): Person 
    {
        return $this->person;
    } 

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
