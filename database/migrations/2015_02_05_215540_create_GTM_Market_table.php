<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGTMMarketTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('GTM_Market')) return;
        Schema::create('GTM_Market', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->string('name', 100)->unique('uniq_in_GTM_Market_name');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('GTM_Market');
    }

}
