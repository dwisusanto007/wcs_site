<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'category',
        'title_en',
        'title_id',
        'description_en',
        'description_id',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }

    public function getTitle(): string
    {
        return $this->{'title_' . app()->getLocale()} ?? $this->title_en;
    }

    public function getDescription(): string
    {
        return $this->{'description_' . app()->getLocale()} ?? $this->description_en;
    }
}
