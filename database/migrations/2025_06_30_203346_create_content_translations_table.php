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
        Schema::create('content_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale')->nullable(); // fa, en, ar, ...
            $table->unsignedBigInteger('content_id')->nullable();
            $table->string('field')->nullable(); // مثل title, description, image و ...
            $table->text('value')->nullable(); // متن، آدرس فایل، آدرس عکس و ...

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content_translations');
    }
};
