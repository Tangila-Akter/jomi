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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('price')->nullable();
            $table->string('type')->nullable();
            $table->string('details')->nullable();
            $table->string('district')->nullable();
            $table->string('thana')->nullable();
            $table->string('village')->nullable();
            $table->string('road')->nullable();
            $table->string('mouja')->nullable();
            $table->string('khotian')->nullable();
            $table->string('daag')->nullable();
            $table->string('user_id')->nullable();
            $table->string('user_email')->nullable();
            $table->string('user_name')->nullable();
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
        Schema::dropIfExists('properties');
    }
};
