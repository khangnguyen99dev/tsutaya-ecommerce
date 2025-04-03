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
        Schema::create('book_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('book_id');
            $table->string('locale')->index();
            $table->string('title')->index();
            $table->text('description');

            $table->unique(['book_id', 'locale']);
        });

        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn(['image', 'description']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_translations');
        Schema::table('books', function (Blueprint $table) {
            $table->string('image', 255)->nullable();
            $table->text('description')->nullable();
        });
    }
};
