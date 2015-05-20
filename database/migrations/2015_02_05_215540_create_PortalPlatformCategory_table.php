<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePortalPlatformCategoryTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('PortalPlatformCategory')) return;
        Schema::create('PortalPlatformCategory', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->string('name');
            $table->string('description');
            $table->integer('order');
            $table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->boolean('active', 1)->default(1);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('PortalPlatformCategory');
    }

}
