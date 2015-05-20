<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCampaignToGamePoolMapTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Campaign_to_GamePool_map', function(Blueprint $table)
        {
            $table->foreign('campaign_id', 'fk_Campaign_to_GamePool_map_Campaign')->references('id')->on('Campaign')->onUpdate('RESTRICT')->onDelete('NO ACTION');
            $table->foreign('gamepool_id', 'fk_Campaign_to_GamePool_map_GamePool')->references('id')->on('GamePool')->onUpdate('RESTRICT')->onDelete('NO ACTION');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Campaign_to_GamePool_map', function(Blueprint $table)
        {
            $table->dropForeign('fk_Campaign_to_GamePool_map_Campaign');
            $table->dropForeign('fk_Campaign_to_GamePool_map_GamePool');
        });
    }

}
