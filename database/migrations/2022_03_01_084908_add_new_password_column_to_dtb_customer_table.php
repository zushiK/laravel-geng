<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dtb_customer', function (Blueprint $table) {
            $table->string('new_password');
            $table->rememberToken();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dtb_customer', function (Blueprint $table) {
            $table->dropColumn('new_password');
            $table->dropColumn('remember_token');
        });
    }
};
