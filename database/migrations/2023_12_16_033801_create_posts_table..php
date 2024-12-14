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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->string('writer_id')->nullable();
            $table->string('post_status')->nullable();
            $table->string('usertype')->nullable();
            $table->integer('category_id')->nullable(); // Changed 'int' to 'integer'
            $table->timestamps();

            // Foreign keys, if needed
            // $table->foreign('writer_id')->references('id')->on('writers')->onDelete('set null');
            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
