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
        //
        Schema::table('dtb_delivfee', function (Blueprint $table) {
            $table->dropPrimary("PRIMARY");
            $table->integer("id");
        });

        Schema::table('dtb_delivtime', function (Blueprint $table) {
            $table->dropPrimary("PRIMARY");
            $table->integer("id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //

        Schema::table('dtb_delivfee', function (Blueprint $table) {
            // $table->dropColumn('del_flg');
            $table->dropColumn("id");
        });

        Schema::table('dtb_delivtime', function (Blueprint $table) {
            // $table->dropColumn('del_flg');
            $table->dropColumn("id");
        });
    }
};
