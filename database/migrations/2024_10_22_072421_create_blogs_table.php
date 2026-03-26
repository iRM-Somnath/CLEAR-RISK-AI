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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->String('title')->nullable();
            $table->String('slug')->nullable();
            $table->String('image')->nullable();
            $table->String('image_original_name')->nullable();
            $table->longText('content')->nullable();
            $table->string('author')->nullable();
            $table->timestamp('published_date')->nullable();
            $table->mediumText('meta_tags')->nullable();
            $table->mediumText('meta_keywords')->nullable();
            $table->mediumText('meta_title')->nullable();
            $table->mediumText('meta_description')->nullable();
            $table->enum('status', [0, 1, 3])->default(1)->comment('0 = inactive, 1 = active, 3 = deleted');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
