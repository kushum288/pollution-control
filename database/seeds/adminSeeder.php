<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->truncate();
        $data= [
            'name' => 'admin',
            'email' => 'kushum@gmail.com',
            'password' => bcrypt('kushum'),
        ];

        DB::table('admins')->insert($data);
    }
}
