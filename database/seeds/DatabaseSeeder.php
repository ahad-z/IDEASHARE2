<?php

use Illuminate\Database\Seeder;

use App\Vote;
use App\Category;
use App\Post;
use App\Comment;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

    	\App\User::create([
    		'name' => 'Hasan Mahmud',
			'email' => 'mahmudbappy.pri@gmail.com',
			'password' => bcrypt('password'),
			'type' => 'admin'
		]);

        $faker = Faker\Factory::create();


        foreach (range(1,3) as $index) {
			\App\User::create([
				'name' => $faker->name,
				'email' => $faker->email,
				'password' => bcrypt('password'),
			]);
		}

        // Categories
        foreach (['Tech', 'Engineering', 'Data Analysis', 'Mobile Apps', ' Mobile Apps', 'Web Programming', 'CMS'] as $name) {
         	Category::create([
        		'name' => $name
        	]);
         }

        foreach (range(1,100) as $index) {
        	$post = Post::create([
        		'user_id' => $faker->numberBetween($min = 1, $max = 3),
        		'category_id' => $faker->numberBetween($min = 1, $max = 3),
        		'title' => $faker->sentence,
        		'content' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
        		'status' => $faker->numberBetween($min = 0, $max = 1)
        	]);

        	foreach (range(2, $faker->numberBetween($min = 1, $max = 15)) as $voteIndex) {
        		Vote::create([
	        		'post_id' => $post->id,
	        		'user_id' => $faker->numberBetween($min = 1, $max = 3),
	        		'type' => $faker->numberBetween($min = 0, $max = 1)
	        	]);

	        	Comment::create([
	        		'post_id' => $post->id,
	        		'user_id' => $faker->numberBetween($min = 1, $max = 3),
	        		'body' => $faker->paragraph($nbSentences = $faker->numberBetween($min = 1, $max = 3), $variableNbSentences = true),
	        	]);
        	}
        }
    }
}
