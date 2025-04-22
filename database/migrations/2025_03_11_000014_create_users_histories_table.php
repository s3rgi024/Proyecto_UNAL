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
        Schema::create('users_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_user_id')->index();
            $table->string('field_modified', 50);
            $table->string('last_value', 50);
            $table->string('updated_value', 100);
            $table->unsignedBigInteger('fk_updated_by')->nullable()->index();
            $table->timestamps();

            //Foreign keys
            $table->foreign('fk_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

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
        Schema::dropIfExists('users_histories');
    }
};
