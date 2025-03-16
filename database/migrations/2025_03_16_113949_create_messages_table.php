<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('story_id')->constrained()->onDelete('cascade');
            $table->foreignId('chapter_id')->nullable()->constrained()->onDelete('cascade'); 
            $table->string('sender_name'); // Nama karakter
            $table->text('message');
            $table->enum('message_type', ['text', 'image', 'video', 'audio'])->default('text');
            $table->string('media_url')->nullable(); // URL media kalau ada
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
