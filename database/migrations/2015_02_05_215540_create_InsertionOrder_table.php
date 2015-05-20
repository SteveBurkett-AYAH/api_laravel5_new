<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInsertionOrderTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('InsertionOrder')) return;
        Schema::create('InsertionOrder', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->string('name', 45)->nullable();
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->integer('target_volume')->nullable();
            $table->decimal('target_value', 12)->nullable();
            $table->enum('billing_frequency', array('monthly'))->nullable()->default('monthly');
            $table->enum('distribution', array('flat','frontloaded'))->nullable()->default('flat');
            $table->string('description')->nullable();
            $table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('InsertionOrder');
    }

}
