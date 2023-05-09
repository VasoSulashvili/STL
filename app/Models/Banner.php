<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Banner extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['image', 'back_image', 'title', 'sub_title', 'url', 'description', 'active'];

    public $translatable = ['title', 'sub_title', 'description'];

    protected $casts = [
        'title' => 'array',
        'sub_title' => 'array',
    ];



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
