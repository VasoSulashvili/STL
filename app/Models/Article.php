<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class Article extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['image', 'author_id', 'title', 'body', 'published_at', 'active'];

    public $translatable = ['title', 'body'];

    protected $casts = [
        'socials' => 'array',
        'published_at' => 'date'
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
