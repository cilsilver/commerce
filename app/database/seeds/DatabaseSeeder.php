<?php

// class DatabaseSeeder extends Seeder {

// 	*
// 	 * Run the database seeds.
// 	 *
// 	 * @return void
	 
// 	public function run()
// 	{
// 		Eloquent::unguard();

// 		// $this->call('UserTableSeeder');
// 	}

// }


class DatabaseSeeder extends Seeder {
			public function run()
				{
			$this->call('UserTableSeeder');
			$this->command->info('users', 'table seeded!') ;
			

			}


}