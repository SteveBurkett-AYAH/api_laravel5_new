<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientReportByPublisherUrldomain extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ClientReportByPublisher_urldomain', function(Blueprint $table)
		{
			$table->date('date_logged');
            $table->string('range_type', 100);
            $table->char('publisher_key', 40);
            $table->char('url_domain', 100);
            $table->integer('num_loads')->nullable();
            $table->integer('num_verified_loads')->nullable();
            $table->integer('num_bot_loads')->nullable();
            $table->integer('num_scorable_loads')->nullable();
            $table->integer('num_iframe_loads')->nullable();
            $table->integer('num_interactions')->nullable();
            $table->integer('num_verified_interactions')->nullable();
            $table->integer('num_bot_interactions')->nullable();
            $table->integer('num_devices')->nullable();
            $table->integer('num_verified_devices')->nullable();
            $table->integer('num_bot_devices')->nullable();
            $table->float('percent_verified_loads')->nullable();
            $table->float('percent_bot_loads')->nullable();
            $table->float('percent_scorable_loads')->nullable();
            $table->float('percent_iframe_loads')->nullable();
            $table->float('percent_verified_interactions')->nullable();
            $table->float('percent_bot_interactions')->nullable();
            $table->float('percent_verified_devices')->nullable();
            $table->float('percent_bot_devices')->nullable();
            $table->float('percent_verified_scored')->nullable();
            $table->float('percent_interaction_loads')->nullable();
            $table->string('category', 15)->nullable();
            $table->unique(['date_logged', 'range_type', 'publisher_key', 'url_domain'], 'clientreportbypublisher_urldomain_uniquekey');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ClientReportByPublisher_urldomain');
	}

}
