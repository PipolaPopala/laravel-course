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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('login')->nullable();
            $table->string('avatar')->nullable();
            $table->text('description')->nullable();
            $table->text('address')->nullable();
            $table->unsignedSmallInteger('phone')->nullable();
            $table->unsignedSmallInteger('gender')->nullable();
            $table->date('birthed_at')->nullable();
            $table->foreignId('user_id')->index()->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
