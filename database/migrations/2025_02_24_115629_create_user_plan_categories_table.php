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
        Schema::create('user_plan_categories', function (Blueprint $table) {
            $table->UUID('id')->primary();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->UUID('plan_id');
            $table->json('categories'); // Store selected categories as JSON
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
        Schema::dropIfExists('user_plan_categories');
    }
};
