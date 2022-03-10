<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dtb_operators')->insert([
            'name' => 'UserName',
            'login_id' => 'operator',
            'password' => Hash::make('password'),
            'fld_code_list' => '[]',
            'create_date' => now(),
            'update_date' => now(),
        ]);
    }
}
