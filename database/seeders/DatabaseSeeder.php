<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@mail.com';
        $user->email_verified_at = now();
        $user->password = bcrypt('admin123');
        $user->remember_token = \Str::random(60);
        $user->created_at = now();
        $user->updated_at = now();
        $user->save();
    }
}
