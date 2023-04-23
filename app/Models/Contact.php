<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Contact extends Model
{
    use HasFactory, HasTranslations;

    protected $casts = [
        'emails' => 'array',
        'phones' => 'array',
        'socials' => 'array',
    ];

    protected $fillable = ['address', 'emails', 'phones', 'map', 'image', 'active'];

    public $translatable = ['address'];

    
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

    protected function ee(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => implode(', ', $this->emails),
        );
    }

}
