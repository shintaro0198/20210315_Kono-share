<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $param = [
            'id' => 1,
            'name' => 'taro',
            'email'=> 'dragoon11@gmail.com',
            'password' => 'dragon112',
            'profile' => 'ドラゴンです',
        ];
        DB::table('share_users')->insert($param);
    }
}
