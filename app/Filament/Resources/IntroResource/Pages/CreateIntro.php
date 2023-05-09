<?php

namespace App\Filament\Resources\IntroResource\Pages;

use App\Filament\Resources\IntroResource;
use App\Models\Intro;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateIntro extends CreateRecord
{
    protected static string $resource = IntroResource::class;

    // Costumization
    protected function handleRecordCreation(array $data): Model
    {
        $intro = new Intro();
        $intro->image_1 = $data['image_1'];
        $intro->image_2 = $data['image_2'];
        $intro->setTranslations('title', $data['title']);
        $intro->setTranslations('text', $data['text']);
        $intro->active = $data['active'] ? $data['active'] : 0;
        $intro->save();

        return $intro;
        // return static::getModel()::create($data);
    }
}
