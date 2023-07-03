<?php
namespace App\Database\Seeds;

use App\Database\Factories\AssignmentFactory;
use Illuminate\Database\Seeder;

class AssignmentsSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		(new AssignmentFactory)->create(10)->save();
	}
}