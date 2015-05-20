<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPublisherSettingsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('PublisherSettings', function(Blueprint $table)
        {
            $table->foreign('publisher_id', 'fk_PublisherSettings_Publisher1')->references('id')->on('Publisher')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('PublisherSettings', function(Blueprint $table)
        {
            $table->dropForeign('fk_PublisherSettings_Publisher1');
        });
    }

}
