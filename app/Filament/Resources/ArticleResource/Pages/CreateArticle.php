<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use App\Filament\Resources\ArticleResource;
use App\Models\Article;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateArticle extends CreateRecord
{
    protected static string $resource = ArticleResource::class;

    public Article $article;

    protected function getFormModel(): Article 
    {
        return $this->article;
    } 

    // Costumization
    protected function handleRecordCreation(array $data): Model
    {
        $article = new Article();
        $article->image = $data['image'];
        // $article->active = $data['active'] ? $data['active'] : 0;
        $article->setTranslations('title', $data['title']);
        $article->setTranslations('body', $data['body']);
        $article->save();

        return $article;
        // return static::getModel()::create($data);
    }
}
