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
        Schema::create('teacher_folders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_teacher_id')->index();
            $table->string('folder_name')->unique()->nullable();
            $table->unsignedBigInteger('fk_state')->index();
            $table->unsignedBigInteger('fk_updated_by')->nullable()->index();
            $table->timestamps();

            $table->foreign('fk_teacher_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('fk_state')
                ->references('id')
                ->on('folder_states')
                ->onDelete('restrict');

            $table->foreign('fk_updated_by')
                ->references('id')
                ->on('users')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_folders');
    }
};
