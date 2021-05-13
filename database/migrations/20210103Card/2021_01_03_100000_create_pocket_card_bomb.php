<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePocketCardBomb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('pocket_card_bomb'))
        {
            Schema::create('pocket_card_bomb', function (Blueprint $table) {
                // $table->id();
                $table->increments('id')->comment('ID');
                // 描述
                $table->enum('version', ['US', 'JP', 'CH'])->comment('版本(US=英文版,JP=日文版,CH=中文版)');
                $table->string('catena', 100)->comment('系列');
                $table->string('name', 100)->comment('名稱');
                $table->text('description')->nullable()->comment('描述');
                $table->string('img', 200)->nullable()->comment('圖片');
                $table->enum('genre', ['P', 'B', 'C', 'G'])->comment('類型(P=活動,B=起始牌組,C=擴充包,G=禮盒)');
                $table->string('code', 20)->nullable()->comment('代號');
                $table->tinyInteger('sort')->default(0)->comment('排序');
                // 狀態
                $table->tinyInteger('status')->default(0)->comment('狀態(0:停用,1:啟用)');
                // $table->timestamps();
                $table->timestamp('created_at')->nullable()->comment('建立時間');
                $table->timestamp('updated_at')->nullable()->comment('更新時間');
                // 索引
                $table->index(['version', 'sort', 'status'], 'query_all');
            });
            DB::statement("ALTER TABLE `pocket_card_bomb` comment '寶可夢卡牌彈數'");
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasTable('pocket_card_bomb'))
        {
            // 刪除table
            Schema::dropIfExists('pocket_card_bomb');
        }
    }
}
