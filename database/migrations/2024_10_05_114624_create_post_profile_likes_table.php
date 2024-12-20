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
        Schema::create('post_profile_likes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->index()->constrained('posts');
            $table->foreignId('profile_id')->index()->constrained('profiles');
            $table->timestamps();
            $table->unique(['post_id', 'profile_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_profile_likes');
    }
};
