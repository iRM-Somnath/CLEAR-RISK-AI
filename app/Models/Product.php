<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',

    ];


    public function plans(){
        $this->hasMany(Plan::class, 'product_id');
    }
}
