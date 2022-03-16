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
            $table->timestamp('create_date');
            $table->timestamp('update_date');
        });

        Schema::table('dtb_delivtime', function (Blueprint $table) {
            $table->timestamp('create_date');
            $table->timestamp('update_date');
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
            $table->dropColumn('create_date');
            $table->dropColumn('update_date');
        });

        Schema::table('dtb_delivtime', function (Blueprint $table) {
            $table->dropColumn('create_date');
            $table->dropColumn('update_date');
        });
    }
};
