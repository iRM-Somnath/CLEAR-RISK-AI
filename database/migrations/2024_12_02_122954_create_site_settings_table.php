<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('smtp_user_id')->nullable();
            $table->string('smtp_password')->nullable();
            $table->string('smtp_port')->nullable();
            $table->string('smtp_encryption')->nullable();
            $table->string('sender_mail')->nullable();
            $table->string('sender_name')->nullable();
            $table->text('phone_no')->nullable();
            $table->string('contact_address')->nullable();
            $table->string('receiver_mail_id')->nullable();
            $table->text('footer_short_desc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
