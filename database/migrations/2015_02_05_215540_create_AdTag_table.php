<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdTagTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('AdTag')) return;
        Schema::create('AdTag', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->string('name', 45);
            $table->binary('html', 65535);
            $table->enum('event', array('initialize','start','complete'))->nullable()->default('complete');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('AdTag');
    }

}
