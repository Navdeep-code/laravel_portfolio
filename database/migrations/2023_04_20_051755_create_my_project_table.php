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
        Schema::create('my_projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('url')->nullable();
            $table->timestamp('date')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('type_id');
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_projects');
    }
};
