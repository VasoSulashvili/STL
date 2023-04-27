<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use App\Filament\Resources\ArticleResource;
use App\Models\Article;
use App\Models\Tag;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
        // dd($data);
        // dd($data['tags']);
        $article = new Article();
        $article->image = $data['image'];
        $article->tag = $data['tag'];
        $article->active = $data['active'] ? $data['active'] : 0;
        $article->setTranslations('title', $data['title']);
        $article->setTranslations('body', $data['body']);
        $article->save();

        
        foreach(explode(',', $data['tag']) as $tag)
        {
            $t = Tag::firstOrCreate(['name' => $tag]);
            DB::table('taggables')->insert([
                'tag_id' => $t->id,
                'taggable_id' => $article->id,
                'taggable_type' => Article::class
            ]);
        }

        return $article;
        // return static::getModel()::create($data);
    }
}
