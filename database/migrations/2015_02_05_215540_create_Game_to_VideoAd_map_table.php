<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGameToVideoAdMapTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('Game_to_VideoAd_map')) return;
        Schema::create('Game_to_VideoAd_map', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->integer('game_id')->index('fk_Game_to_VideoAd_map_game_id');
            $table->integer('videoad_id')->index('fk_Game_to_VideoAd_map_videoad_id');
            $table->float('weight', 10, 0);
            $table->unique(['game_id','videoad_id'], 'uniq_in_Game_to_VideoAd');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Game_to_VideoAd_map');
    }

}
