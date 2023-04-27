<?php

namespace App\Filament\Resources\BannerResource\Pages;

use App\Filament\Resources\BannerResource;
use App\Models\Banner;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateBanner extends CreateRecord
{
    protected static string $resource = BannerResource::class;

    public Banner $banner;

    protected function getFormModel(): Banner 
    {
        return $this->banner;
    } 

    // Costumization
    protected function handleRecordCreation(array $data): Model
    {
        $banner = new Banner();
        $banner->image = $data['image'];
        $banner->back_image = $data['back_image'];
        $banner->url = $data['url'];
        $banner->active = $data['active'] ? $data['active'] : 0;
        $banner->setTranslations('title', $data['title']);
        $banner->setTranslations('sub_title', $data['sub_title']);
        $banner->setTranslations('description', $data['description']);
        $banner->save();

        return $banner;
        // return static::getModel()::create($data);
    }
}
