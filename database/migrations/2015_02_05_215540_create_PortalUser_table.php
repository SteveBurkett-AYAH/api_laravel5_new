<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePortalUserTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('PortalUser')) return;
        Schema::create('PortalUser', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->boolean('active', 1)->default(1);
            $table->string('name', 45);
            $table->string('email')->nullable()->unique('email_UNIQUE');
            $table->string('password', 45);
            $table->string('password_reset_token')->nullable();
            $table->dateTime('password_reset_expiration')->nullable();
            $table->string('salt', 45)->nullable()->default('');
            $table->decimal('revenue_share', 4, 3)->nullable()->default(0.300);
            $table->boolean('w9_form_received', 1)->default(0);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('PortalUser');
    }

}
