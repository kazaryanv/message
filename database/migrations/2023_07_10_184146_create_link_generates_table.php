<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('link_generates', function (Blueprint $table) {
            $table->id();
            $table->string('content')->nullable();
            $table->integer('reading')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('link_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('link_generates');
    }
};
