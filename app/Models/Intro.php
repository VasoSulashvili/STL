<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Intro extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['img_1', 'img_2', 'title', 'text', 'list', 'active'];

    protected $casts = [
        'title' => 'array',
        'text' => 'array',
        'list' => 'array',
    ];

    public $translatable = ['title', 'text', 'list'];

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
