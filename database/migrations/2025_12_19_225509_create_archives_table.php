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
        Schema::create('archives', function (Blueprint $table) {
            $table->id();
            // Basic Information
            $table->string('title');
            $table->string('slug')->unique();

            // File Information
            $table->string('pdf_path');
            $table->unsignedBigInteger('pdf_size')->default(0); // in bytes
            // Thumbnail/Preview
            $table->string('thumbnail_path')->nullable();

            // Publishing Information
            $table->date('publication_date');
            // Metadata
            $table->json('metadata')->nullable(); // For storing extra data like author, tags, etc.
            $table->boolean('is_featured')->default(false);

            // Status & Visibility
            $table->boolean('is_published')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->boolean('is_archived')->default(false);



            // Relationships
            $table->foreignId('category_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Who uploaded it

            // Timestamps
            $table->timestamps();
            $table->softDeletes(); // For soft delete functionality

            // Indexes for performance
            $table->index(['is_published', 'publication_date']);
            $table->index('is_featured');
            $table->index(['category_id', 'is_published']);
            $table->index('slug');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archives');
    }
};
