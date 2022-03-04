<?php

namespace Database\Seeders;

use App\Enums\MenuEnum;
use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create(['id' => MenuEnum::EVENT,         'menu_name' => 'イベント',        'created_by' => 1, 'updated_by' => 1]);
        Menu::create(['id' => MenuEnum::USER,          'menu_name' => '学生',            'created_by' => 1, 'updated_by' => 1]);
        Menu::create(['id' => MenuEnum::COMPANY,       'menu_name' => '企業',            'created_by' => 1, 'updated_by' => 1]);
        Menu::create(['id' => MenuEnum::RECRUIT_GUIDE, 'menu_name' => '募集要項',        'created_by' => 1, 'updated_by' => 1]);
        Menu::create(['id' => MenuEnum::INTERNSHIP,    'menu_name' => 'インターンシップ', 'created_by' => 1, 'updated_by' => 1]);
        Menu::create(['id' => MenuEnum::PARTNER,       'menu_name' => '加盟店',          'created_by' => 1, 'updated_by' => 1]);
        Menu::create(['id' => MenuEnum::INFO,          'menu_name' => 'コンテンツ',        'created_by' => 1, 'updated_by' => 1]);
        Menu::create(['id' => MenuEnum::DM_MAIL,       'menu_name' => 'DM/メール',       'created_by' => 1, 'updated_by' => 1]);
        Menu::create(['id' => MenuEnum::MANAGEMENT,    'menu_name' => '管理',            'created_by' => 1, 'updated_by' => 1]);
    }
}
