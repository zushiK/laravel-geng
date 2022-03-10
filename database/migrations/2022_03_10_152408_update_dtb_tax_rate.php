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
        Schema::table('dtb_tax_rule', function (Blueprint $table) {
            $table->increments('tax_rule_id')->change();
            $table->integer('member_id')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dtb_tax_rule', function (Blueprint $table) {
            $table->integer('tax_rule_id')->unsigned()->change();
            $table->integer('member_id')->default(null)->change();
        });
    }
};
