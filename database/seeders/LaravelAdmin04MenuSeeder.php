<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaravelAdmin04MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * 指令:: php artisan db:seed --class=LaravelAdmin04MenuSeeder
     * 
     * @return void
     */
    public function run()
    {
        $now_date = date('Y-m-d h:i:s');

        // 菜單
        DB::table('admin_menu')->truncate();
        DB::table('admin_menu')->insert([
            // 首頁
            ['id' => '1', 'parent_id' => '0', 'order' => '1', 'title' => 'Index', 'icon' => 'fa-dashboard', 'uri' => '/', 'created_at' => $now_date, 'updated_at' => $now_date],
            // System
            ['id' => '2', 'parent_id' => '0', 'order' => '800', 'title' => '系統管理', 'icon' => 'fa-users', 'uri' => NULL, 'created_at' => $now_date, 'updated_at' => $now_date],
                ['id' => '3', 'parent_id' => '2', 'order' => '801', 'title' => '用戶管理', 'icon' => 'fa-users', 'uri' => 'auth/users', 'created_at' => $now_date, 'updated_at' => $now_date],
                ['id' => '4', 'parent_id' => '2', 'order' => '802', 'title' => '角色管理', 'icon' => 'fa-user', 'uri' => 'auth/roles', 'created_at' => $now_date, 'updated_at' => $now_date],
                ['id' => '5', 'parent_id' => '2', 'order' => '803', 'title' => '權限管理', 'icon' => 'fa-ban', 'uri' => 'auth/permissions', 'created_at' => $now_date, 'updated_at' => $now_date],
                ['id' => '6', 'parent_id' => '2', 'order' => '804', 'title' => '選單管理', 'icon' => 'fa-bars', 'uri' => 'auth/menu', 'created_at' => $now_date, 'updated_at' => $now_date],
                ['id' => '7', 'parent_id' => '2', 'order' => '805', 'title' => 'Operation log', 'icon' => 'fa-history', 'uri' => 'auth/logs', 'created_at' => $now_date, 'updated_at' => $now_date],
            // Helpers
            ['id' => '8', 'parent_id' => '0', 'order' => '850', 'title' => 'Helpers', 'icon' => 'fa-gears', 'uri' => NULL, 'created_at' => $now_date, 'updated_at' => $now_date],
                ['id' => '9', 'parent_id' => '8', 'order' => '851', 'title' => 'Scaffold', 'icon' => 'fa-keyboard-o', 'uri' => 'helpers/scaffold', 'created_at' => $now_date, 'updated_at' => $now_date],
                ['id' => '10', 'parent_id' => '8', 'order' => '852', 'title' => 'Database terminal', 'icon' => 'fa-database', 'uri' => 'helpers/terminal/database', 'created_at' => $now_date, 'updated_at' => $now_date],
                ['id' => '11', 'parent_id' => '8', 'order' => '853', 'title' => 'Laravel artisan', 'icon' => 'fa-terminal', 'uri' => 'helpers/terminal/artisan', 'created_at' => $now_date, 'updated_at' => $now_date],
                ['id' => '12', 'parent_id' => '8', 'order' => '854', 'title' => 'Routes', 'icon' => 'fa-list-alt', 'uri' => 'helpers/routes', 'created_at' => $now_date, 'updated_at' => $now_date],
        ]);
    }
}
