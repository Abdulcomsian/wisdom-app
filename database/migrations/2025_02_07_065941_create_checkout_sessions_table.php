<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkout_sessions', function (Blueprint $table) {
            $table->UUID('id')->primary();
            $table->string('session_id')->unique(); // Stripe session ID
            $table->UUID('plan_id');
            $table->json('categories')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Reference to users table
            $table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkout_sessions');
    }
};
