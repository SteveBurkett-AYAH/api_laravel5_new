<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInsertionOrderBillTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('InsertionOrderBill')) return;
        Schema::create('InsertionOrderBill', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->integer('insertionorder_id');
            $table->string('month', 10)->nullable()->default('00-00');
            $table->decimal('billed_value', 12)->nullable();
            $table->integer('billed_volume')->nullable();
            $table->enum('status', array('billed','paid'))->nullable();
            $table->integer('actual_volume')->nullable();
            $table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unique(['insertionorder_id','month'], 'unique_insertionorder_month');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('InsertionOrderBill');
    }

}
