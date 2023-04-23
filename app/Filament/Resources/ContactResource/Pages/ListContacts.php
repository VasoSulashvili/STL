<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use App\Models\Contact;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContacts extends ListRecords
{
    protected static string $resource = ContactResource::class;

    protected function getActions(): array
    {
        if(!Contact::exists())
        {
            return [
                Actions\CreateAction::make(),
            ];
        }
        return [];
        
    }
}
