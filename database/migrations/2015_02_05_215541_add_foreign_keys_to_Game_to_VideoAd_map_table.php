<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGameToVideoAdMapTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Game_to_VideoAd_map', function(Blueprint $table)
        {
            $table->foreign('game_id', 'fk_Game_to_VideoAd_map_game_id')->references('id')->on('Game')->onUpdate('RESTRICT')->onDelete('NO ACTION');
            $table->foreign('videoad_id', 'fk_Game_to_VideoAd_map_videoad_id')->references('id')->on('VideoAd')->onUpdate('RESTRICT')->onDelete('NO ACTION');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Game_to_VideoAd_map', function(Blueprint $table)
        {
            $table->dropForeign('fk_Game_to_VideoAd_map_game_id');
            $table->dropForeign('fk_Game_to_VideoAd_map_videoad_id');
        });
    }

}
