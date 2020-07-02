<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('vi_VN');

        foreach(range(1, 500) as $index) {
            DB::table('posts')->insert([
                'title' =>  $faker->unique()->sentence($nbWords = 6, $variableNbWords = true),
                'content' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'active' => 1,
                'user_id' => random_int(1, 1000)
            ]);
        }

        // DB::table('posts')->insert([
        //     ['title' => Str::random(25), 'content' => Str::random(255), 'active' => 1, 'user_id' => random_int(1, 10) ],
        //     ['title' => Str::random(25), 'content' => Str::random(255), 'active' => 1, 'user_id' => random_int(1, 10) ],
        //     ['title' => Str::random(25), 'content' => Str::random(255), 'active' => 1, 'user_id' => random_int(1, 10) ],
        // ]);
    }
}
