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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->decimal('original_price', 12, 2)->nullable();
            $table->decimal('price', 12, 2)->nullable();
            $table->text('description')->nullable();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->enum('plan_type',[1,2,3])->comment('1 = Monthly, 2 = Yearly')->nullable();
            $table->enum('show_original_price',[0,1])->comment('0 = NO, 1 = YES')->default(0);
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
        Schema::dropIfExists('plans');
    }
};
