<?php

namespace App\Filament\Resources\PersonResource\Pages;

use App\Filament\Resources\PersonResource;
use App\Models\Person;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreatePerson extends CreateRecord
{
    protected static string $resource = PersonResource::class;

    public Person $person;

    protected function getFormModel(): Person 
    {
        return $this->person;
    } 

    // Costumization
    protected function handleRecordCreation(array $data): Model
    {
        $person = new Person();
        $person->image = $data['image'];
        $person->active = $data['active'] ? $data['active'] : 0;
        $person->socials = $data['socials'];
        $person->setTranslations('name', $data['name']);
        $person->setTranslations('surname', $data['surname']);
        $person->setTranslations('position', $data['position']);
        $person->setTranslations('license', $data['license']);
        $person->setTranslations('biography', $data['biography']);
        $person->save();

        return $person;
        // return static::getModel()::create($data);
    }
}
