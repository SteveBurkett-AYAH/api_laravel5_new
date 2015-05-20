<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPortalPlatformTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('PortalPlatform', function(Blueprint $table)
        {
            $table->foreign('portal_platform_category_id', 'fk_PortalPlatform_PortalPlatformCategory1')->references('id')->on('PortalPlatformCategory')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('PortalPlatform', function(Blueprint $table)
        {
            $table->dropForeign('fk_PortalPlatform_PortalPlatformCategory1');
        });
    }

}
