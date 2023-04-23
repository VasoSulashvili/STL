<?php

namespace App\Filament\Resources\AboutResource\Pages;

use App\Filament\Resources\AboutResource;
use App\Models\About;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateAbout extends CreateRecord
{
    protected static string $resource = AboutResource::class;

    // Costumization
    protected function handleRecordCreation(array $data): Model
    {
        $about = new About();
        $about->image = $data['image'];
        $about->setTranslations('overview', $data['overview']);
        $about->setTranslations('target', $data['target']);
        $about->setTranslations('mission', $data['mission']);
        $about->active = $data['active'] ? $data['active'] : 0;
        $about->save();

        return $about;
        // return static::getModel()::create($data);
    }
}
