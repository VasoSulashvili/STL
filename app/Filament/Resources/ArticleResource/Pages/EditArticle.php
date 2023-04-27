<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use App\Filament\Resources\ArticleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Tag;

class EditArticle extends EditRecord
{
    protected static string $resource = ArticleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }


    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $record->update($data);

        DB::table('taggables')
            ->where('taggable_id', '=', $record->id)
            ->delete();

        foreach(explode(',', $data['tag']) as $tag)
        {
            $t = Tag::firstOrCreate(['name' => $tag]);
            DB::table('taggables')->insert([
                'tag_id' => $t->id,
                'taggable_id' => $record->id,
                'taggable_type' => \App\Models\Article::class
            ]);
        }
    
        return $record;
    }
}
