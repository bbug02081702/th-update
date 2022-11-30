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
        Schema::create('motels', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->integer('price')->nullable();
            $table->integer('area')->nullable();
            $table->integer('count_view')->nullable();
            $table->string('address')->nullabel();
            $table->string('latlng')->nullable();
            $table->string('images')->nullable();
            $table->integer('user-id')->nulable();
            $table->integer('category_id')->nullable();
            $table->integer('district_if')->nullable();
            $table->string('utilities')->nullable();
            $table->string('phone')->nullable();
            $table->integer('approve')->nullable();
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
        Schema::dropIfExists('motels');
    }
};
