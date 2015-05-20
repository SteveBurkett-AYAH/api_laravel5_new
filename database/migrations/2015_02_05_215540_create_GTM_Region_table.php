<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGTMRegionTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('GTM_Region')) return;
        Schema::create('GTM_Region', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->string('name', 100)->unique('uniq_in_GTM_Region_name');
            $table->string('code', 10)->unique('uniq_in_GTM_Region_code');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('GTM_Region');
    }

}
