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
        Schema::create('llantas', function (Blueprint $table) {
            $table->id();
            $table->integer('status');
            $table->string('model');
            $table->string('slug');
            $table->integer('category_id');
            $table->string('image');
            $table->decimal('precio', 11, 2);
            $table->string('alto');
            $table->string('ancho');
            $table->string('rin');
            $table->integer('in_discount');
            $table->integer('discount');
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('llantas');
    }
};
