<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;

class RootAdminSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        (new Admin([
                      'email'          => 'admin@gmail.com',
                      'password'       => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                      'admin_class'    => 0,
                      'is_super_admin' => 0,
                      'created_by'     => 1,
                      'created_at'     => now(),
                  ]))->save();

        Admin::factory()->count(20)->create();
    }
}
