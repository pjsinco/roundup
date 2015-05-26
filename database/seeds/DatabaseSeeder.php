<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

        $this->call('ArticlesTableSeeder');
	}

}

class ArticlesTableSeeder extends Seeder {

    public function run() 
    {
        $faker = Faker\Factory::create();
        
        $feature = App\Article::create([
            'wp_id' => '11111',
            'type' => 'feature',
            'bottom_rule' => '1',
            'kicker' => implode(' ', $faker->words(3)),
            'title' => $faker->sentence(10),
            'excerpt' => implode('', $faker->sentences(2)),
            'link' => $faker->url,
            'img_alt' => implode(' ', $faker->words(4)),
            'img_src' => $faker->imageUrl(480, 320, 'cats'),
        ]);
    }

}
