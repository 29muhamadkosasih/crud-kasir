<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'nama' => 'admin',
            'username' => 'admin',
            'password' => 'admin',
            'role' => 'admin',
        ]);
        DB::table('user')->insert([
            'nama' => 'kasir',
            'username' => 'kasir',
            'password' => 'kasir',
            'role' => 'kasir',
        ]);
        DB::table('user')->insert([
            'nama' => 'manajer',
            'username' => 'manajer',
            'password' => 'manajer',
            'role' => 'manajer',
        ]);
    }
}
