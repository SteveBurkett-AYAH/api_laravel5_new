<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRevshareSummaryTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('RevshareSummary')) return;
        Schema::create('RevshareSummary', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->integer('portaluser_id')->nullable();
            $table->decimal('revenue_earned', 12)->default(0.00);
            $table->float('revenue_share_rate', 10, 0)->nullable();
            $table->decimal('adjustment', 12)->nullable();
            $table->enum('adjustment_type', array('add','overwrite'))->nullable();
            $table->enum('status', array('estimated','available','payment requested','payment sent'))->nullable();
            $table->string('note')->nullable();
            $table->dateTime('create_timestamp')->nullable();
            $table->dateTime('request_timestamp')->nullable();
            $table->dateTime('paid_timestamp')->nullable();
            $table->timestamp('update_timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('month', 10)->nullable();
            $table->integer('branded_games_passed')->nullable();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('RevshareSummary');
    }

}
