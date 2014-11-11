<?php

use Faker\Factory as Faker;

class TodoListItemTableSeeder extends Seeder
{
	public function run()
	{
		$faker = Faker::create();

		for($i = 0; $i < 10; $i++)
		{
			TodoListItem::create( array('list_id' => $faker->numberBetween(1,4), 'task' => $faker->word() ) );
		}
		
	}
}