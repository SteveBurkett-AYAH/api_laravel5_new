<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRevsharePayeeTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('RevsharePayee')) return;
        Schema::create('RevsharePayee', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->integer('portaluser_id')->nullable();
            $table->enum('w9_form_received', array('yes','no'))->nullable()->default('no');
            $table->string('contact_name')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();
            $table->dateTime('create_timestamp')->nullable();
            $table->dateTime('update_timestamp')->default('0000-00-00 00:00:00');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('RevsharePayee');
    }

}
