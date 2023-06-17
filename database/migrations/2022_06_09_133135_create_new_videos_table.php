<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_videos', function (Blueprint $table) {
            $table->id();
            $table->string('part');
            $table->string('channelId');
            $table->integer('maxResults');
            $table->string('country')->nullable();
            $table->string('orderBy')->nullable();
            $table->string('type')->nullable();
            $table->string('apiKey');
            $table->string('youTubeEndPoint');
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
        Schema::dropIfExists('new_videos');
    }
}
