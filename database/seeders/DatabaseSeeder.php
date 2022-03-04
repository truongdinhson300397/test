<?php

namespace Database\Seeders;

use App\Models\AdminClassMenu;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call(RootAdminSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(AdminClassMenuTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
