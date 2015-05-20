<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGTMCountryTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('GTM_Country')) return;
        Schema::create('GTM_Country', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->string('name', 45)->unique('uniq_in_GTM_Country_name');
            $table->string('code', 10)->unique('uniq_in_GTM_Country_code');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('GTM_Country');
    }

}
