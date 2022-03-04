<?php

namespace Database\Seeders;

use App\Models\AdminClassMenu;
use App\Models\Authority;
use App\Enums\AuthorityLevelEnum;
use Illuminate\Database\Seeder;

class AuthorityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = AdminClassMenu::admin()->get();
        foreach ($menus as $menu) {
            Authority::create([
                                  'admin_id' => 1,
                                  'menu_id' => $menu->menu_id,
                                  'authority' => AuthorityLevelEnum::UPDATE,
                                  'create_id' => 1,
                                  'update_id' => 1,
                              ]);
        }
    }
}
