<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePublisherHostnameTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('PublisherHostname')) return;
        Schema::create('PublisherHostname', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->integer('publisher_id')->index('in_PublisherHostname_publisher_id');
            $table->string('hostname', 100)->index('in_PublisherHostname_hostname');
            $table->unique(['publisher_id','hostname'], 'uniq_publisher_id_hostname');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('PublisherHostname');
    }

}
