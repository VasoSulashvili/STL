<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Course extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['image', 'title', 'intro', 'description', 'duration', 'active'];

    public $translatable = ['title', 'intro', 'description', 'skills'];

    protected $casts = [
        'title' => 'array',
        'intro' => 'array',
        'description' => 'array',
    ];


    public function skills()
    {
        return $this->hasMany(Skill::class, 'course_id');
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
