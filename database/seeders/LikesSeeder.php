<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikesSeeder extends Seeder
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
            'num'=>2,
            'share_id' =>'novf12',
            'user_id' =>'nfv12',
        ];
        DB::table('likes')->insert($param);
    }
}
