<?php

namespace Database\Factories;

use App\Models\AdminClassMenu;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminClassMenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AdminClassMenu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email'          => $this->faker->unique()->safeEmail(),
            'password'       => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret,
            'addmin_class'   => $this->faker->numberBetween(0, 1),
            'is_super_admin' => $this->faker->numberBetween(0, 1),
            'logined_at'    => $this->faker->dateTime,
        ];
    }
}
