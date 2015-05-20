<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePublisherGamePoolTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('PublisherGamePool')) return;
        Schema::create('PublisherGamePool', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->float('weight', 10, 0);
            $table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('publisher_id')->index('fk_PublisherGamePool_Publisher1');
            $table->integer('gamepool_id')->index('fk_PublisherGamePool_GamePool1');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('PublisherGamePool');
    }

}
