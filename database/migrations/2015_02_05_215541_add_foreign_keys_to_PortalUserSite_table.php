<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPortalUserSiteTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('PortalUserSite', function(Blueprint $table)
        {
            $table->foreign('portal_platform_id', 'fk_PortalUserSite_PortalPlatform1')->references('id')->on('PortalPlatform')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('portal_user_id', 'fk_PortalUserSite_PortalUser1')->references('id')->on('PortalUser')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('publisher_id', 'fk_PortalUserSite_Publisher1')->references('id')->on('Publisher')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('PortalUserSite', function(Blueprint $table)
        {
            $table->dropForeign('fk_PortalUserSite_PortalPlatform1');
            $table->dropForeign('fk_PortalUserSite_PortalUser1');
            $table->dropForeign('fk_PortalUserSite_Publisher1');
        });
    }

}
