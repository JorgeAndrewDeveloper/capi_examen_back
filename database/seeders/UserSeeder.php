<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserAdress;
use App\Models\User as Users;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Users::factory(100)->create();
        UserAdress::factory(50)->create();
    }
}
