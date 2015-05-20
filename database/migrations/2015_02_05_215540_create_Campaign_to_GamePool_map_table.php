<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCampaignToGamePoolMapTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('Campaign_to_GamePool_map')) return;
        Schema::create('Campaign_to_GamePool_map', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->integer('campaign_id')->index('in_Campaign_to_GamePool_campaign_id');
            $table->integer('gamepool_id')->index('in_Campaign_to_GamePool_gamepool_id');
            $table->integer('weight')->default(1);
            $table->unique(['campaign_id','gamepool_id'], 'uniq_in_Campaign_to_GamePool');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Campaign_to_GamePool_map');
    }

}
