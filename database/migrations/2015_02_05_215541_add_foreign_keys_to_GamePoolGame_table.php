<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGamePoolGameTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('GamePoolGame', function(Blueprint $table)
        {
            $table->foreign('game_id', 'fk_GamePoolGame_Game1')->references('id')->on('Game')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign('gamepool_id', 'fk_GamePoolGame_GamePool1')->references('id')->on('GamePool')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('GamePoolGame', function(Blueprint $table)
        {
            $table->dropForeign('fk_GamePoolGame_Game1');
            $table->dropForeign('fk_GamePoolGame_GamePool1');
        });
    }

}
