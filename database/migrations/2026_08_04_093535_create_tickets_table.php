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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->integer('submitted_by');
            $table->integer('assigned_to');
            $table->integer('category_id');
            $table->enum('priority', ['high', 'medium', 'low'])->default('low');
            $table->string('title');
            $table->text('content');
            $table->enum('status', ['open', 'assigned', 'pending', 'rejected', 'in-progress', 'closed'])->default('open');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
