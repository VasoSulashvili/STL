<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Person extends Model
{
    use HasTranslations;

    protected $fillable = ['image', 'name', 'surname', 'position', 'license', 'biography', 'socials', 'active'];

    public $translatable = ['name', 'surname', 'position', 'license', 'biography'];

    protected $casts = [
        'socials' => 'array',
    ];

    // protected $casts = [
    //     'jobs' => 'array',
    // ];
    
    // Relationships
    public function jobs()
    {
        return $this->belongsToMany(Job::class, 'person_job', 'person_id', 'job_id');

    }

    public function articles()
    {
        return $this->hasMany(Article::class, 'author_id');
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->name . ' ' . $this->surname,
        );
    }

    protected function type(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->jobs->pluck('name')->toArray(),
        );
    }

}
