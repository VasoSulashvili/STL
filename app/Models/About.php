<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class About extends Model
{
    use HasTranslations;

    protected $fillable = ['overview', 'target', 'mission', 'active'];

    protected $casts = [
        'overview' => 'array',
        'target' => 'array',
        'mission' => 'array',
    ];

    public $translatable = ['overview', 'target', 'mission'];

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
