<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSummaryObservationsByDayTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('SummaryObservations_by_day')) return;
        Schema::create('SummaryObservations_by_day', function(Blueprint $table)
        {
            $table->date('date_logged')->default('0000-00-00');
            $table->char('publisher_key', 40)->default('');
            $table->string('url_domain', 100)->default('');
            $table->integer('page_views')->nullable();
            $table->integer('initialized')->nullable();
            $table->integer('has_data')->nullable();
            $table->integer('measurable')->nullable();
            $table->integer('validated')->nullable();
            $table->integer('in_iframe')->nullable();
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
        Schema::drop('SummaryObservations_by_day');
    }

}
