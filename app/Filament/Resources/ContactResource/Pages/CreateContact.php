<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;

class CreateContact extends CreateRecord
{
    protected static string $resource = ContactResource::class;

    // Costumization
    protected function handleRecordCreation(array $data): Model
    {
        // dd($data);
        $contact = new Contact();
        $contact->emails = $data['emails'];
        $contact->phones = $data['phones'];
        $contact->map = $data['map'];
        $contact->image = $data['image'];
        $contact->socials = $data['socials'];
        $contact->setTranslations('address', $data['address']);
        $contact->active = $data['active'] ? $data['active'] : 0;
        $contact->save();

        return $contact;
        // return static::getModel()::create($data);
    }
}
