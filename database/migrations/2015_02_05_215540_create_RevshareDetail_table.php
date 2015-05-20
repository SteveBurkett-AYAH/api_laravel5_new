<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRevshareDetailTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('RevshareDetail')) return;
        Schema::create('RevshareDetail', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->integer('revsharesummary_id')->nullable();
            $table->integer('publisher_id')->nullable();
            $table->decimal('revenue_earned', 12)->nullable();
            $table->integer('branded_games_passed')->nullable();
            $table->timestamp('create_timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('insertionorder_id')->nullable();
            $table->boolean('is_estimate')->nullable();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('RevshareDetail');
    }

}
