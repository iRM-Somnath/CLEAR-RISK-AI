<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image_name',
        'image_original_name',
        'location',
        'organizer',
        'meeting_url',
        'start_date',
        'end_date',
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
