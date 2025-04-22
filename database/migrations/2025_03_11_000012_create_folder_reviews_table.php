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
        Schema::create('folder_reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_folder_id')->index();
            $table->unsignedBigInteger('fk_registered_state')->index();
            $table->unsignedBigInteger('fk_updated_by')->index()->nullable();
            $table->string('comments')->nullable();
            $table->timestamp('created_at')->useCurrent();

            //Foreign keys
            $table->foreign('fk_folder_id')
            ->references('id')
            ->on('teacher_folders')
            ->onDelete('cascade');

            $table->foreign('fk_registered_state')
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
        Schema::dropIfExists('folder_reviews');
    }
};
