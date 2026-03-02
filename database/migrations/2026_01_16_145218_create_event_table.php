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
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name',30);
            $table->text('description');
            $table->text('location');
            $table->text('map')->nullable();
            $table->date('date')->nullable();
            $table->time('hour');
            $table->enum('type',['official', 'exhibition','charity'])->default('official');
            $table->text('tags');
            $table->boolean('visible')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event');
    }
};
