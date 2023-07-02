<?php
namespace App\Database\Seeds;

use App\Models\Shipment;
use App\Database\Factories\ShipmentFactory;
use Illuminate\Database\Seeder;

class ShipmentsSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		(new ShipmentFactory)->create(20)->save();
	}
}