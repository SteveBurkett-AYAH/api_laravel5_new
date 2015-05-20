<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCampaignTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('Campaign')) return;
        Schema::create('Campaign', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->string('name', 45)->index('in_Campaign_name');
            $table->string('publisher_key')->default('');
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->string('description')->nullable();
            $table->boolean('allow_observer')->default(0);
            $table->boolean('allow_moat')->default(1);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Campaign');
    }

}
