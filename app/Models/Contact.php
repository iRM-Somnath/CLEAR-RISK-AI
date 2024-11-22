<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'designation',
        'country',
        'message',
        'updated_by',
        'created_at',
        'updated_at',
    ];
}

