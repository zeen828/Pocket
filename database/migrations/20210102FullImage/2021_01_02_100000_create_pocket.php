<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePocket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('pocket'))
        {
            Schema::create('pocket', function (Blueprint $table) {
                // $table->id();
                $table->increments('id')->comment('ID');
                // 狀態
                $table->tinyInteger('status')->default(0)->comment('狀態(0:停用,1:啟用)');
                // $table->timestamps();
                $table->timestamp('created_at')->nullable()->comment('建立時間');
                $table->timestamp('updated_at')->nullable()->comment('更新時間');
            });
            DB::statement("ALTER TABLE `pocket` comment '寶可夢圖鑑'");
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasTable('pocket'))
        {
            // 刪除table
            Schema::dropIfExists('pocket');
        }
    }
}
