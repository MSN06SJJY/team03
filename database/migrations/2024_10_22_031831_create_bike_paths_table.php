<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBikePathsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bike_paths', function (Blueprint $table) {
            $table->id(); // 自動生成自增主鍵 'id'
            $table->string('bike_path_name', 255)->comment('自行車道名稱'); // 自行車道名稱
            $table->string('district', 255)->comment('行政區'); // 行政區，多個區以逗號分隔
            $table->decimal('length', 5, 1)->comment('自行車道長度（公里）'); // 長度，格式為 5 位數，1 位小數
            $table->text('nearby_attractions')->nullable()->comment('周邊景點'); // 周邊景點，逗號分隔，可為空值
            $table->timestamps(); // 自動生成 created_at 和 updated_at 欄位
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bike_paths');
    }
}
