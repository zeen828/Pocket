<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePocketCardType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('pocket_card_type'))
        {
            Schema::create('pocket_card_type', function (Blueprint $table) {
                // $table->id();
                $table->increments('id')->comment('ID');
                // 描述
                $table->string('name', 30)->comment('名稱');
                $table->text('description')->nullable()->comment('描述');
                $table->tinyInteger('sort')->default(0)->comment('排序');
                // 狀態
                $table->tinyInteger('status')->default(0)->comment('狀態(0:停用,1:啟用)');
                // $table->timestamps();
                $table->timestamp('created_at')->nullable()->comment('建立時間');
                $table->timestamp('updated_at')->nullable()->comment('更新時間');
            });
            DB::statement("ALTER TABLE `pocket_card_type` comment '寶可夢卡牌分類'");
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasTable('pocket_card_type'))
        {
            // 刪除table
            Schema::dropIfExists('pocket_card_type');
        }
    }
}
