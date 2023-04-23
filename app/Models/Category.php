<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'name', 
        'active'
    ];

    public $translatable = ['name'];



    // Relationships

    public function articles()
    {
        return $this->belongsToMany(
            Article::class, 
            'article_category', 
            'category_id',
            'article_id');
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
