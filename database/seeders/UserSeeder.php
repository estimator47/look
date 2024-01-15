<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'admin',
                'email' => 'sale@lookatme4you.com',
                'password' => bcrypt('lam_$book$'),
                'role' => 'admin'
            ]
        );
    }
}
