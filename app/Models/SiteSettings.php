<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSettings extends Model
{
    protected $fillable = ['logo', 'favicon','smtp_user_id','smtp_password','smtp_port','sender_mail','sender_name','phone_no','contact_address','footer_short_desc','receiver_mail_id'];

    use HasFactory;
}
