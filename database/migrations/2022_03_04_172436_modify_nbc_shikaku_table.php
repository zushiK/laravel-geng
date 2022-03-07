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
        Schema::table('nbc_shikaku', function (Blueprint $table) {
            $table->tinyInteger('struct')->comment('資格階層');
            // 基本3点セット
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
        Schema::table('nbc_shikaku', function (Blueprint $table) {
            $table->dropColumn('struct');
            $table->dropColumn('create_date');
            $table->dropColumn('update_date');
            $table->dropColumn('del_flg');
        });
    }
};
