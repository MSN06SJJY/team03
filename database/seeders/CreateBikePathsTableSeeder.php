<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateBikePathsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       
        DB::table('bike_paths')->insert([
            [
                'bike_path_name' => '省道台1線(後壁-新市段)自行車道',
                'district' => '後壁區、新營區、柳營區、六甲區、官田區、善化區及新市區',
                'length' => 43.2,
                'nearby_attractions' => '新營天鵝湖、新營糖廠、隆田酒廠、善化啤酒廠',
            ],
            [
                'bike_path_name' => '白河蓮鄉自行車道',
                'district' => '白河區',
                'length' => 42,
                'nearby_attractions' => '蓮花資訊館、蓮花公園、小南海',
            ],
            [
                'bike_path_name' => '嘉南大圳新營支線與舊鐵道自行車道',
                'district' => '後壁區、新營區',
                'length' => 6,
                'nearby_attractions' => '烏樹林糖廠、五分車站',
            ],
            [
                'bike_path_name' => '小南海自行車道',
                'district' => '後壁區、白河區',
                'length' => 13.8,
                'nearby_attractions' => '蘭花生技園區、普陀寺、小南海上茄苳埤、將軍埤',
            ],
            // 在這裡繼續添加其餘的資料...
            [
                'bike_path_name' => '鹽水糖鐵綠廊道',
                'district' => '鹽水區',
                'length' => 3.18,
                'nearby_attractions' => '鹽水月津港、舊台糖鹽水車站',
            ],
        ]);
    }
}
