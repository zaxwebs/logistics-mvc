<?php
namespace App\Database\Seeds;

use App\Database\Factories\DriverFactory;
use Illuminate\Database\Seeder;

class DriversSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		// You can also use factories like this
		(new DriverFactory)->create(10)->save();

		// even better, you can use them together :-)
	}
}