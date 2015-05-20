<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGamePoolGameTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('GamePoolGame')) return;
        Schema::create('GamePoolGame', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->float('weight', 10, 0);
            $table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('game_id')->index('fk_GamePoolGame_Game1');
            $table->integer('gamepool_id')->index('fk_GamePoolGame_GamePool1');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('GamePoolGame');
    }

}
