<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSummaryObservationsUniquesByRangeTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('SummaryObservations_uniques_by_range')) return;
        Schema::create('SummaryObservations_uniques_by_range', function(Blueprint $table)
        {
            $table->date('date_logged')->default('0000-00-00');
            $table->char('publisher_key', 40)->default('');
            $table->string('url_domain', 100)->default('');
            $table->string('range_type', 100)->nullable();
            $table->integer('unique_visitors')->nullable();
            $table->integer('unique_validated')->nullable();
            $table->primary(['date_logged','publisher_key','url_domain'], 'date_pubkey_domain');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('SummaryObservations_uniques_by_range');
    }

}
