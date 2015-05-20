<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGameToAdTagMapTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Game_to_AdTag_map', function(Blueprint $table)
        {
            $table->foreign('adtag_id', 'fk_Game_to_AdTag_map_adtag_id')->references('id')->on('AdTag')->onUpdate('RESTRICT')->onDelete('NO ACTION');
            $table->foreign('game_id', 'fk_Game_to_AdTag_map_game_id')->references('id')->on('Game')->onUpdate('RESTRICT')->onDelete('NO ACTION');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Game_to_AdTag_map', function(Blueprint $table)
        {
            $table->dropForeign('fk_Game_to_AdTag_map_adtag_id');
            $table->dropForeign('fk_Game_to_AdTag_map_game_id');
        });
    }

}
