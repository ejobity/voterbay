<?php

namespace Database\Seeders;

use App\Models\Plan;
use App\Models\User;
use App\Models\Group;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        ///User::truncate();
        //Plan::truncate();

        //$user = User::factory(10)->create();

        User::create([
            'name' => 'Emile Jopbity',
            'email' => 'ejobity@hotmail.com',
            'password' => '$2y$10$4OpqPaq8BaAU9EFEP4LNpehYWd8WByKGTvk61UnaxYt/Dx3FZiCZy',
        ]);

        Plan::create([
            'name' => 'Starter',
            'description' => 'If you are a small business amn please select this plan',
            'voter_limit' => 1000,
            'price' => 99,
            'image' => 'http://127.0.0.1:8000/images/icons/plan-s1.svg',
            'recommend' => true
        ]);

        Plan::create([
            'name' => 'Pro',
            'description' => 'If you are a small business amn please select this plan',
            'voter_limit' => 5000,
            'price' => 299,
            'image' => 'http://127.0.0.1:8000/images/icons/plan-s2.svg',
            'recommend' => false
        ]);

        Plan::create([
            'name' => 'Enterprise',
            'description' => 'If you are a small business amn please select this plan',
            'voter_limit' => 15000,
            'price' => 599,
            'image' => 'http://127.0.0.1:8000/images/icons/plan-s3.svg',
            'recommend' => false
        ]);

        Plan::create([
            'name' => 'Mega',
            'description' => 'If you are a small business amn please select this plan',
            'voter_limit' => 20000,
            'price' => 899,
            'image' => 'http://127.0.0.1:8000/images/icons/plan-s4.svg',
            'recommend' => false
        ]);

    }
}
