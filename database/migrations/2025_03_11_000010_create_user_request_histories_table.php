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
        Schema::create('user_request_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_user_id')->index();
            $table->unsignedBigInteger('fk_state')->index();
            $table->string('comments')->nullable();
            $table->unsignedBigInteger('fk_reviewed_by')->nullable()->index();
            $table->timestamps();

            //Foreign keys

            $table->foreign('fk_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('fk_state')
                ->references('id')
                ->on('user_states')
                ->onDelete('restrict');

            $table->foreign('fk_reviewed_by')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_request_histories');
    }
};
