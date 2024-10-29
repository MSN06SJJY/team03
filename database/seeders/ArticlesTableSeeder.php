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
        // 隨機資料
        $bikewayNames = [
            '省道台1線(後壁-新市段)自行車道',
            '白河蓮鄉自行車道',
            '嘉南大圳新營支線與舊鐵道自行車道',
            '小南海自行車道',
            '八田自行車道',
            '七股潟湖自行車道',
            '七股自行車道',
            '新化自行車道',
            '台江大道5-3段自行車道',
        ];

        $districts = [
            '後壁區、新營區、柳營區',
            '白河區',
            '後壁區、新營區',
            '後壁區、白河區',
            '官田區',
            '七股區',
            '七股區',
            '新化區',
            '安南區',
        ];

        $surroundingAttractions = [
            '新營天鵝湖、新營糖廠',
            '蓮花資訊館、蓮花公園',
            '烏樹林糖廠、五分車站',
            '蘭花生技園區、普陀寺',
            '八田與一紀念園區、烏山頭水庫',
            '觀海樓、七股潟湖',
            '海寮龍海宮、海寮紅樹林驛站',
            '虎頭埤風景區、木架山',
            '中信金融管理學院',
        ];

        $articles = [];

        for ($i = 0; $i < 10; $i++) { // 生成10條隨機資料
            $articles[] = [
                'bikeway_name' => $bikewayNames[array_rand($bikewayNames)],
                'districts' => $districts[array_rand($districts)],
                'length' => mt_rand(1, 100) / 10, // 隨機長度，1到100之間的數字
                'surrounding_attractions' => $surroundingAttractions[array_rand($surroundingAttractions)],
            ];
        }

        DB::table('Articles')->insert($articles);
    }
}
