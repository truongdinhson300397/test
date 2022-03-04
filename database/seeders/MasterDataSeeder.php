<?php

namespace Database\Seeders;

use App\Enums\MenuEnum;
use App\Models\Menu;
use Illuminate\Database\Seeder;

class MasterDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create(['menu_id' => MenuEnum::EVENT, 'menu_name' => 'イベント', 'create_id' => 1, 'update_id' => 1]);
        Menu::create(['menu_id' => MenuEnum::USER, 'menu_name' => '学生', 'create_id' => 1, 'update_id' => 1]);
        Menu::create(['menu_id' => MenuEnum::COMPANY, 'menu_name' => '企業', 'create_id' => 1, 'update_id' => 1]);
        Menu::create(['menu_id' => MenuEnum::RECRUIT_GUIDE, 'menu_name' => '募集要項', 'create_id' => 1, 'update_id' => 1]);
        Menu::create(['menu_id' => MenuEnum::INTERNSHIP, 'menu_name' => 'インターンシップ', 'create_id' => 1, 'update_id' => 1]);
        Menu::create(['menu_id' => MenuEnum::PARTNER, 'menu_name' => '加盟店', 'create_id' => 1, 'update_id' => 1]);
        Menu::create(['menu_id' => MenuEnum::INFO, 'menu_name' => 'コンテンツ', 'create_id' => 1, 'update_id' => 1]);
        Menu::create(['menu_id' => MenuEnum::DM_MAIL, 'menu_name' => 'DM/メール', 'create_id' => 1, 'update_id' => 1]);
        Menu::create(['menu_id' => MenuEnum::MANAGEMENT, 'menu_name' => '管理', 'create_id' => 1, 'update_id' => 1]);
    }
}
