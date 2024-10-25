<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('Articles')->insert([
            [
                'bikeway_name' => '省道台1線(後壁-新市段)自行車道',
                'districts' => '後壁區、新營區、柳營區、六甲區、官田區、善化區及新市區',
                'length' => 43.2,
                'surrounding_attractions' => '新營天鵝湖、新營糖廠、隆田酒廠、善化啤酒廠',
            ],
            [
                'bikeway_name' => '白河蓮鄉自行車道',
                'districts' => '白河區',
                'length' => 42,
                'surrounding_attractions' => '蓮花資訊館、蓮花公園、小南海',
            ],
            [
                'bikeway_name' => '嘉南大圳新營支線與舊鐵道自行車道',
                'districts' => '後壁區、新營區',
                'length' => 6,
                'surrounding_attractions' => '烏樹林糖廠、五分車站',
            ],
            [
                'bikeway_name' => '小南海自行車道',
                'districts' => '後壁區、白河區',
                'length' => 13.8,
                'surrounding_attractions' => '蘭花生技園區、普陀寺、小南海上茄苳埤、將軍埤',
            ],
            [
                'bikeway_name' => '八田自行車道',
                'districts' => '官田區',
                'length' => 6,
                'surrounding_attractions' => '八田與一紀念園區、烏山頭水庫風景區、嘉南大圳出水口景觀台、赤山龍湖巖',
            ],
            [
                'bikeway_name' => '七股潟湖自行車道',
                'districts' => '七股區',
                'length' => 1.8,
                'surrounding_attractions' => '觀海樓、七股潟湖及鹽田風貌',
            ],
            [
                'bikeway_name' => '七股自行車道',
                'districts' => '七股區',
                'length' => 19,
                'surrounding_attractions' => '海寮龍海宮、海寮紅樹林驛站、南灣觀光碼頭',
            ],
            [
                'bikeway_name' => '新化自行車道',
                'districts' => '新化區',
                'length' => 37.4,
                'surrounding_attractions' => '虎頭埤風景區、木架山',
            ],
            [
                'bikeway_name' => '台江大道5-3段自行車道',
                'districts' => '安南區',
                'length' => 5.7,
                'surrounding_attractions' => '中信金融管理學院',
            ],
            // 以下依此類推，添加其他資料
            // ...
        ]);
    }
}
