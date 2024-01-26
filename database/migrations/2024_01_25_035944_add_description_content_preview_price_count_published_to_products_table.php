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
        Schema::table('products', function (Blueprint $table) {
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->string('preview_image')->nullable();

            $table->integer('price')->nullable();
            $table->integer('count')->nullable();
            $table->boolean('is_published')->nullable();

            $table->foreignId('user_id')->nullable()->index()->constrained('users');
            $table->foreignId('category_id')->nullable()->index()->constrained('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->dropColumn('content');
            $table->dropColumn('preview_image');

            $table->dropColumn('price');
            $table->dropColumn('count');
            $table->dropColumn('is_published');

            $table->dropColumn('user_id');
            $table->dropColumn('category_id');
        });
    }
};
