<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGameTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Game', function(Blueprint $table)
        {
            $table->foreign('gametype_id', 'fk_Game_GameType1')->references('id')->on('GameType')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Game', function(Blueprint $table)
        {
            $table->dropForeign('fk_Game_GameType1');
        });
    }

}
