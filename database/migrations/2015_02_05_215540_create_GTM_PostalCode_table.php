<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGTMPostalCodeTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('GTM_PostalCode')) return;
        Schema::create('GTM_PostalCode', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->string('code', 10)->unique('uniq_in_GTM_PostalCode_code');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('GTM_PostalCode');
    }

}
