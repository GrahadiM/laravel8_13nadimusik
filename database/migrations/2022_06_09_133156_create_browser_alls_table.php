<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrowserAllsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('browser_alls', function (Blueprint $table) {
            $table->id();
            $table->string('part');
            $table->integer('maxResults');
            $table->string('country')->nullable();
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
        Schema::dropIfExists('browser_alls');
    }
}
