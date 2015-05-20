<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePublisherTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('Publisher')) return;
        Schema::create('Publisher', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->string('key')->index('in_Publisher_key');
            $table->string('scoring_key');
			$table->integer('client_id')->nullable();
            $table->boolean('active')->default(1);
            $table->string('description');
            $table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->decimal('modal_fraction', 3)->nullable();
            $table->boolean('allow_ads')->nullable()->default(0);
            $table->boolean('allow_cookies')->nullable()->default(1);
            $table->boolean('allow_observer')->default(1);
            $table->boolean('allow_moat')->default(1);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Publisher');
    }

}
