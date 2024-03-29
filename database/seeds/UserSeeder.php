<?php

use Illuminate\Database\Seeder;
use App\Admin;
use Faker\Factory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        Admin::create([
            'nama'=>$faker->name,
            'email'=>'admin@admin.com',
            'password'=>bcrypt('admin'),
        ]);
    }
}