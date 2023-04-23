<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Job extends Model
{
    use HasTranslations;

    protected $fillable = ['name', 'active'];

    protected $casts = [
        'name' => 'array',
    ];

    public $translatable = ['name'];


    // Relationships
    public function persons()
    {
        return $this->belongsToMany(Person::class, 'person_job', 'job_id', 'person_id');

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
