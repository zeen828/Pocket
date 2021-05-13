<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePocketGames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('pocket_games'))
        {
            Schema::create('pocket_games', function (Blueprint $table) {
                // $table->id();
                $table->increments('id')->comment('ID');
                // 關聯
                $table->integer('pg_id')->comment('世代ID(pocket_generations.id)');
                // 描述
                $table->string('name', 100)->comment('名稱(中)');
                $table->string('name_en', 100)->nullable()->comment('名稱(英)');
                $table->string('name_jp', 100)->nullable()->comment('名稱(日)');
                $table->text('description')->nullable()->comment('描述');
                $table->string('img', 200)->nullable()->comment('圖片');
                $table->text('release')->nullable()->comment('發行時間');
                $table->tinyInteger('sort')->default(0)->comment('排序');
                // 狀態
                $table->tinyInteger('status')->default(0)->comment('狀態(0:停用,1:啟用)');
                // $table->timestamps();
                $table->timestamp('created_at')->nullable()->comment('建立時間');
                $table->timestamp('updated_at')->nullable()->comment('更新時間');
                // 索引
                $table->index(['pg_id', 'sort', 'status'], 'query_all');
            });
            DB::statement("ALTER TABLE `pocket_games` comment '寶可夢遊戲'");
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasTable('pocket_games'))
        {
            // 刪除table
            Schema::dropIfExists('pocket_games');
        }
    }
}
