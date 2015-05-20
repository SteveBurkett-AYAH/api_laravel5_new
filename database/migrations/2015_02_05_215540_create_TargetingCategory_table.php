<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTargetingCategoryTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('TargetingCategory')) return;
        Schema::create('TargetingCategory', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->string('category', 45)->index('in_TargettingCategory_category');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('TargetingCategory');
    }

}
