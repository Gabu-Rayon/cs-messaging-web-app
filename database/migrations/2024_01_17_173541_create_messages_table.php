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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->text('message_body');
            $table->string('status')->default('pending')->nullable(); 
            $table->boolean('priority')->default(0)->nullable(); 
           $table->text('response')->nullable()->nullable(); 
           $table->unsignedBigInteger('agent_id')->nullable();     
            $table->timestamps();

        // Add a foreign key constraint
        $table->foreign('agent_id')->references('id')->on('users')->onDelete('set null');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};