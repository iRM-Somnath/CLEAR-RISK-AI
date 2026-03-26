<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'image_original_name',
        'content',
        'slug',
        'author',
        'published_date',
        'meta_tags',
        'meta_keywords',
        'meta_title',
        'meta_description',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];

    // Relationship with the User model for the creator
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    // Relationship with the User model for the last updater
    public function lastUpdator()
    {
        return $this->belongsTo(User::class, 'updated_by', 'id');
    }
}
