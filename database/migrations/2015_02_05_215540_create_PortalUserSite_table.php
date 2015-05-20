<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePortalUserSiteTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('PortalUserSite')) return;
        Schema::create('PortalUserSite', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->boolean('active', 1)->default(1);
            $table->string('url');
            $table->integer('portal_user_id')->index('fk_PortalUserSite_PortalUser1');
            $table->string('name', 45);
            $table->integer('publisher_id')->index('fk_PortalUserSite_Publisher1');
            $table->integer('portal_platform_id')->index('fk_PortalUserSite_PortalPlatform1');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('PortalUserSite');
    }

}
