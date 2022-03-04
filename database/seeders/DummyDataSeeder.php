<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $user = User::first();
        Auth::login($user);

        // Item
        $items = Item::pluck('id');
        // Tag
        $tags = Tag::factory()->count(20)->create();
        // Keywords
        Keyword::factory()->count(30)->create();
        // User
        $users = User::factory()->count(20)->create();
        // Proposal
        Auth::logout();

        Proposal::factory()
                ->count(50)
                ->state(new Sequence(function ($sequence) use ($users) {
                    $user = $users->random();
                    return [
                        'created_by' => $user->id,
                    ];
                }))
                ->create()
                ->each(function (Proposal $proposal) use ($user, $users, $items, $tags, $faker) {
                    Auth::login($user);
                    $proposal->tags()->sync($tags->random($faker->numberBetween(0, 10)));
                    $proposal->items()->sync($items->random($faker->numberBetween(0, 10)));
                    $proposal->images()->createMany(ProposalImage::factory($faker->numberBetween(0, 10))->raw());
                    $proposal->companies()->createMany(ProposalCompany::factory($faker->numberBetween(0, 10))->raw());
                    $proposal->directors()->createMany(ProposalDirector::factory($faker->numberBetween(0, 10))->raw());
                    $proposal->staff()->associate($users->random($faker->numberBetween(0, $users->count())));
                    $users = $users->random($faker->numberBetween(0, 10));
                    foreach ($users as $user) {
                        $proposal->users()->attach($user, [
                            'is_like' => $faker->boolean,
                            'is_mark' => $user->id === $proposal->created_by,
                        ]);
                    }
                    Auth::logout();
                });
    }
}
