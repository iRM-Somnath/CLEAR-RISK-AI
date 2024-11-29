<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = ['slug', 'page_name', 'content', 'hero_title', 'hero_description', 'hero_image'];

    use HasFactory;
}
