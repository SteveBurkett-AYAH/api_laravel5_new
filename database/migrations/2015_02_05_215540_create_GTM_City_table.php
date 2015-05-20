<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGTMCityTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('GTM_City')) return;
        Schema::create('GTM_City', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->string('name', 100);
            $table->integer('region_id');
            $table->integer('country_id');
            $table->unique(['name','region_id','country_id'], 'uniq_in_GTM_City_Region_Country');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('GTM_City');
    }

}
