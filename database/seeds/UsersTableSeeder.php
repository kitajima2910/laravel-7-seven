<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('vi_VN');

        foreach(range(1, 1000) as $index) {
            if($index >= 500) {
                
            } else {

            }
            DB::table('users')->insert([
                'name' => $faker->fullName(),
                'email' => $faker->unique()->email,
                'password' => $faker->password,
            ]);
        }

        // DB::table('users')->insert([
        //     [ 'name' => Str::random(255), 'email' => Str::random(5) . '@gmail.com', 'password' => bcrypt(Str::random(6))],
        //     [ 'name' => Str::random(255), 'email' => Str::random(5) . '@gmail.com', 'password' => bcrypt(Str::random(6))],
        //     [ 'name' => Str::random(255), 'email' => Str::random(5) . '@gmail.com', 'password' => bcrypt(Str::random(6))],
        //     [ 'name' => Str::random(255), 'email' => Str::random(5) . '@gmail.com', 'password' => bcrypt(Str::random(6))],
        //     [ 'name' => Str::random(255), 'email' => Str::random(5) . '@gmail.com', 'password' => bcrypt(Str::random(6))],
        // ]);
    }
}
