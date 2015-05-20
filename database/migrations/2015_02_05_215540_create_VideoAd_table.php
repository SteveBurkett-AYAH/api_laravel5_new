<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVideoAdTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('VideoAd')) return;
        Schema::create('VideoAd', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->string('name', 45);
            $table->string('url', 500);
            $table->string('duration', 45);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('VideoAd');
    }

}
