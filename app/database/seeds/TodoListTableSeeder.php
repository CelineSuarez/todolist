<?php

use Faker\Factory as Faker;

class TodoListTableSeeder extends Seeder
{
	public function run()
	{
		$faker = Faker::create();

		for($i = 0; $i < 4; $i++)
		{
			TodoList::create( array( 'name' => $faker->name() ) );
		}
		
	}
}