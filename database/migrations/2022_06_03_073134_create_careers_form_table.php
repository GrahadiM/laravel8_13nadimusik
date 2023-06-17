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
        Schema::create('careers_form', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('career_id')->nullable();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->text('desc');
            $table->string('file');
            $table->timestamps();

            $table->foreign('career_id')->references('id')->on('careers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('careers_form');
    }
};
