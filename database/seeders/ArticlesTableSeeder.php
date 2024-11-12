<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    public function run()
    {
        // 隨機資料
        $bikewayNames = [
            '省道台線(後壁-新市段)自行車道',
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

        // 生成隨機資料並直接插入資料庫
        for ($i = 0; $i < 10; $i++) { // 假設插入 10 筆資料
            DB::table('articles')->insert([
                'bikeway_name' => $bikewayNames[array_rand($bikewayNames)], // 隨機選擇一個自行車道名稱
                'districts' => $districts[array_rand($districts)],         // 隨機選擇一個行政區
                'length' => mt_rand(1, 100) / 10,                            // 隨機生成長度，範圍 0.1 - 10
                'surrounding_attractions' => $surroundingAttractions[array_rand($surroundingAttractions)], // 隨機選擇一個周邊景點
            ]);
        }
    }
}
