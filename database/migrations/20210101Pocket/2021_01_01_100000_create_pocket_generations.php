<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePocketGenerations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('pocket_generations'))
        {
            Schema::create('pocket_generations', function (Blueprint $table) {
                // $table->id();
                $table->increments('id')->comment('ID');
                // 描述
                $table->string('name', 30)->comment('名稱');
                $table->string('start', 20)->nullable()->comment('開始時間');
                $table->string('end', 20)->nullable()->comment('結束時間');
                $table->integer('pocket_count')->default(0)->comment('寶可夢數量');
                $table->string('area', 30)->comment('主要區域');
                $table->tinyInteger('sort')->default(0)->comment('排序');
                // 狀態
                $table->tinyInteger('status')->default(0)->comment('狀態(0:停用,1:啟用)');
                // $table->timestamps();
                $table->timestamp('created_at')->nullable()->comment('建立時間');
                $table->timestamp('updated_at')->nullable()->comment('更新時間');
                // 索引
                $table->index(['sort', 'status'], 'query_all');
            });
            DB::statement("ALTER TABLE `pocket_generations` comment '寶可夢世代分類'");
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasTable('pocket_generations'))
        {
            // 刪除table
            Schema::dropIfExists('pocket_generations');
        }
    }
}
