<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGamePoolTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('GamePool')) return;
        Schema::create('GamePool', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->string('name', 45)->nullable();
            $table->enum('type', array('captcha','videoad'))->nullable()->default('captcha');
            $table->text('description', 65535)->nullable();
            $table->boolean('active')->default(1);
            $table->float('weight', 10, 0);
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
        Schema::drop('GamePool');
    }

}
