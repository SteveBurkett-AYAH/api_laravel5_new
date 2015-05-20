<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGameToAdTagMapTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('Game_to_AdTag_map')) return;
        Schema::create('Game_to_AdTag_map', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->integer('game_id')->index('fk_Game_to_AdTag_map_game_id');
            $table->integer('adtag_id')->index('fk_Game_to_AdTag_map_adtag_id');
            $table->unique(['game_id','adtag_id'], 'uniq_in_Game_to_AdTag');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Game_to_AdTag_map');
    }

}
