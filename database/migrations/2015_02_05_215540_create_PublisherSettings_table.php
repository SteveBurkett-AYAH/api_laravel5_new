<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePublisherSettingsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('PublisherSettings')) return;
        Schema::create('PublisherSettings', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('publisher_id')->index('fk_PublisherSettings_Publisher1');
            $table->boolean('use_modal')->default(1);
            $table->boolean('auto_start')->default(0);
            $table->integer('max_height');
            $table->integer('max_width');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('PublisherSettings');
    }

}
