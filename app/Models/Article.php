<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['image', 'author_id', 'title', 'tag', 'body', 'published_at', 'active'];

    public $translatable = ['title', 'body'];

    protected $casts = [
        'socials' => 'array',
        // 'tag' => 'string',
        'published_at' => 'date',
    ];


    public function categories()
    {
        return $this->belongsToMany(
            Category::class, 
            'article_category', 
            'article_id',
            'category_id');
    }

    public function author() : BelongsTo
    {
        return $this->belongsTo(Person::class, 'author_id');
    }

    public function tags()
    {
        return $this->morphToMany(
            Tag::class, 
            'taggable',);
    }



    /**
     * Scope a query to only include active users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeActive($query)
    {
        $query->where('active', 1);
    }
}
