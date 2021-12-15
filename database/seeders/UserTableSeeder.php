<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new User;
        $a->name = "Bryn Jenkins";
        $a->email ="bryn1@email.com";
        $a->password="password";
        $a->save();

        $users = User::factory()->count(50)->create();
    }
}
