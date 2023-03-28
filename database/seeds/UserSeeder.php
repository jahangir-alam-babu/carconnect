<?php

use App\User;
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
        User::Create([
            'name' => "Admin",
            'email' => "admin@demo.com",
            'email_verified_at' => now(),
            'nik' => "121212121212",
            'address' => "Location",
            'phone' => "0124576975",
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
        ]);

        $this->command->info('User added succesfully');
    }
}
