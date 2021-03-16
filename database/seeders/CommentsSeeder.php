<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CommentsSeeder extends Seeder
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
            'share_id' => 'novf12',
            'user_id' => 'nfv12',
            'content' =>'cnosdnvo',
        ];
        DB::table('comments')->insert($param);
    }
}
