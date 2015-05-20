<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPublisherGamePoolTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('PublisherGamePool', function(Blueprint $table)
        {
            $table->foreign('gamepool_id', 'fk_PublisherGamePool_GamePool1')->references('id')->on('GamePool')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('publisher_id', 'fk_PublisherGamePool_Publisher1')->references('id')->on('Publisher')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('PublisherGamePool', function(Blueprint $table)
        {
            $table->dropForeign('fk_PublisherGamePool_GamePool1');
            $table->dropForeign('fk_PublisherGamePool_Publisher1');
        });
    }

}
