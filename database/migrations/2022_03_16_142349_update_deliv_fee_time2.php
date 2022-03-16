<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $res = DB::select("SELECT * FROM dtb_delivfee ORDER BY deliv_id, fee_id ");
        $counter = 0;
        foreach ($res as $row) {
            $counter ++;
            $deliv_id = $row->deliv_id;
            $fee_id = $row->fee_id;
            DB::statement("UPDATE dtb_delivfee SET id=".$counter." WHERE deliv_id = $deliv_id AND fee_id = $fee_id ");
        }


        $res = DB::select("SELECT * FROM dtb_delivtime ORDER BY deliv_id, time_id  ");
        $counter = 0;
        foreach ($res as $row) {
            $counter ++;
            $deliv_id = $row->deliv_id;
            $time_id = $row->time_id;
            DB::statement("UPDATE dtb_delivtime SET id=".$counter." WHERE deliv_id = $deliv_id AND time_id = $time_id ");
        }


        Schema::table('dtb_delivfee', function (Blueprint $table) {
            $table->primary("id");
        });

        Schema::table('dtb_delivtime', function (Blueprint $table) {
            $table->primary("id");
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
    }
};
