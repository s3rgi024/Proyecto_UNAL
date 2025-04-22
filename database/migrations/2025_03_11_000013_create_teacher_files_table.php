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
        Schema::create('teacher_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_folder_id')->index();
            $table->unsignedBigInteger('fk_file_type')->index();
            $table->unsignedBigInteger('fk_updated_by')->index()->nullable();
            $table->timestamps();  

            $table->unique(['fk_folder_id', 'fk_file_type']);

            //Foreign keys

            $table->foreign('fk_folder_id')
                ->references('id')
                ->on('teacher_folders')
                ->onDelete('cascade');

            $table->foreign('fk_file_type')
                ->references('id')
                ->on('file_types')
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
        Schema::dropIfExists('teacher_files');
    }
};
