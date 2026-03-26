<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQS extends Model
{
    use HasFactory;
    protected $fillable = [
        'question',
        'answer',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',

    ];


    public function creator(){
       return  $this->belongsTo(User::class, 'created_by','id');
    }

    public function lastUpdator(){
        return $this->belongsTo(User::class, 'updated_by','id');
    }
}
