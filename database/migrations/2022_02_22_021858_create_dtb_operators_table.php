<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dtb_operators', function (Blueprint $table) {
            $table->id('operator_id');
            $table->string('name');
            $table->text('login_id')->unique();
            $table->text('password');
            $table->json('fld_code_list');
            $table->tinyInteger('is_active')->default(0);
            $table->integer('creator_id')->nullable();
            $table->timestamp('last_login_date')->nullable();
            $table->timestamp('create_date');
            $table->timestamp('update_date');
            $table->tinyInteger('del_flg')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dtb_operators');
    }
};
