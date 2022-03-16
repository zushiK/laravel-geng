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
        Schema::table('dtb_deliv', function (Blueprint $table) {
            $table->increments('deliv_id')->change();
        });

        Schema::table('dtb_delivfee', function (Blueprint $table) {
            $table->tinyInteger('del_flg')->default(0);
            // $table->dropPrimary("PRIMARY");
            // $table->id("id");
        });

        Schema::table('dtb_delivtime', function (Blueprint $table) {
            $table->tinyInteger('del_flg')->default(0);
            // $table->dropPrimary("PRIMARY");
            // $table->id("id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dtb_deliv', function (Blueprint $table) {
            $table->integer('deliv_id')->unsigned()->change();
        });

        Schema::table('dtb_delivfee', function (Blueprint $table) {
            $table->dropColumn('del_flg');
            // $table->dropColumn("id");
        });

        Schema::table('dtb_delivtime', function (Blueprint $table) {
            $table->dropColumn('del_flg');
            // $table->dropColumn("id");
        });
    }
};
