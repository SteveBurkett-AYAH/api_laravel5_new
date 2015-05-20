<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInsertionOrderToCampaignMapTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('InsertionOrder_to_Campaign_map')) return;
        Schema::create('InsertionOrder_to_Campaign_map', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->integer('insertionorder_id');
            $table->integer('campaign_id');
            $table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('InsertionOrder_to_Campaign_map');
    }

}
