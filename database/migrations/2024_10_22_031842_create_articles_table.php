<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();  // 自動增加的 ID 欄位
            $table->string('bikeway_name')->comment('自行車道名稱');  // 自行車道名稱
            $table->string('districts')->comment('行政區');  // 行政區
            $table->decimal('length', 5, 2)->comment('長度');  // 長度
            $table->text('surrounding_attractions')->comment('周邊景點');  // 周邊景點
            $table->timestamps();  // 追加 created_at 和 updated_at 欄位
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
