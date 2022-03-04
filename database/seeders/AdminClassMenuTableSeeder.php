<?php

namespace Database\Seeders;

use App\Enums\AdminClass;
use App\Enums\MenuEnum;
use App\Models\AdminClassMenu;
use Illuminate\Database\Seeder;

class AdminClassMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ADMIN
        AdminClassMenu::create($this->attributes(AdminClass::ADMIN, MenuEnum::EVENT));
        AdminClassMenu::create($this->attributes(AdminClass::ADMIN, MenuEnum::USER));
        AdminClassMenu::create($this->attributes(AdminClass::ADMIN, MenuEnum::COMPANY));
        AdminClassMenu::create($this->attributes(AdminClass::ADMIN, MenuEnum::PARTNER));
        AdminClassMenu::create($this->attributes(AdminClass::ADMIN, MenuEnum::INFO));
        AdminClassMenu::create($this->attributes(AdminClass::ADMIN, MenuEnum::DM_MAIL));
        AdminClassMenu::create($this->attributes(AdminClass::ADMIN, MenuEnum::MANAGEMENT));

        // 企業
        AdminClassMenu::create($this->attributes(AdminClass::COMPANY, MenuEnum::EVENT));
        AdminClassMenu::create($this->attributes(AdminClass::COMPANY, MenuEnum::USER));
        AdminClassMenu::create($this->attributes(AdminClass::COMPANY, MenuEnum::COMPANY));
        AdminClassMenu::create($this->attributes(AdminClass::COMPANY, MenuEnum::RECRUIT_GUIDE));
        AdminClassMenu::create($this->attributes(AdminClass::COMPANY, MenuEnum::INTERNSHIP));
        AdminClassMenu::create($this->attributes(AdminClass::COMPANY, MenuEnum::DM_MAIL));
        AdminClassMenu::create($this->attributes(AdminClass::COMPANY, MenuEnum::MANAGEMENT));
    }

    private function attributes($adminClass, $menuId): array
    {
        return [
            'admin_class' => $adminClass,
            'menu_id' => $menuId,
            'is_visible' => 1,
            'created_by' => 1,
            'updated_by' => 1
        ];
    }
}
