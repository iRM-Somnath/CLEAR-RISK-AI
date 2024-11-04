<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image_name',
        'image_original_name',
        'location',
        'meeting_url',
        'start_date',
        'end_date',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];
}
