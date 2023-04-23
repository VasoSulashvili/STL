<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use App\Models\Category;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;

    // Costumization
    protected function handleRecordCreation(array $data): Model
    {
        $category = new Category();
        $category->setTranslations('name', $data['name']);
        $category->active = $data['active'] ? $data['active'] : 0;
        $category->save();

        return $category;
        // return static::getModel()::create($data);
    }
}
