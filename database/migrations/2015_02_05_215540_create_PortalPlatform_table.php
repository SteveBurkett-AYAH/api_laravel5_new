<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePortalPlatformTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('PortalPlatform')) return;
        Schema::create('PortalPlatform', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('name', 45);
            $table->string('display_name', 45);
            $table->integer('portal_platform_category_id')->index('fk_PortalPlatform_PortalPlatformCategory1');
            $table->integer('order');
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
        Schema::drop('PortalPlatform');
    }

}
