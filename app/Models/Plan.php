<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'product_id',
        'description',
        'status',
        'price',
        'plan_type',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',

    ];

    public function products(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
