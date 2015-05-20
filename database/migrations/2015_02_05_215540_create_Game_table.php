<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGameTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('Game')) return;
        Schema::create('Game', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->string('title');
            $table->string('version');
            $table->integer('width');
            $table->integer('height');
            $table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('gametype_id')->index('fk_Game_GameType1');
            $table->boolean('active')->default(1);
            $table->integer('mistakesAllowed')->nullable();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Game');
    }

}
