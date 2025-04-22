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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_type_dni')->index();
            $table->unsignedBigInteger('dni')->index()->unique();
            $table->string('first_name', 50);
            $table->string('second_name', 50)->nullable();
            $table->string('first_surname', 50);
            $table->string('second_surname', 50)->nullable();
            $table->string('email')->unique()->index();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone', 20)->nullable();
            $table->unsignedBigInteger('fk_role')->index();
            $table->timestamp('banned_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('fk_state')->index();
            $table->rememberToken();
            $table->timestamps();

            //Foreign keys
            $table->foreign('fk_type_dni')
                ->references('id')
                ->on('document_types')
                ->onDelete('restrict');
            
            $table->foreign('fk_role')
                ->references('id')
                ->on('roles')
                ->onDelete('restrict');

            $table->foreign('fk_state')
                ->references('id')
                ->on('user_states')
                ->onDelete('restrict');
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
