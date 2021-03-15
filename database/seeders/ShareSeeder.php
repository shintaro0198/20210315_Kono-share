<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'id' =>1,
            'user_id' => 'alphax2',
            'share'=>'んｄじょあのｆの',
        ];
        DB::table('shares')->insert($param);
    }
}
