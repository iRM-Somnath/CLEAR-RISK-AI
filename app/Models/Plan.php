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
        'original_price',
        'show_original_price',
        'plan_type',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',

    ];

    public function products(){
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function creator(){
        return  $this->belongsTo(User::class, 'created_by','id');
    }

    public function lastUpdator(){
         return $this->belongsTo(User::class, 'updated_by','id');
     }
}
