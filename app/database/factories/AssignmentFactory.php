<?php

namespace App\Database\Factories;

use App\Models\Driver;
use App\Models\Shipment;
use App\Models\Assignment;

class AssignmentFactory extends Factory
{
	public $model = Assignment::class;

	public function definition(): array
	{
		$shipmentIds = Shipment::pluck('id')->all();
		$driverIds = Driver::pluck('id')->all();

		return [
			'shipment_id' => $this->faker->randomElement($shipmentIds),
			'driver_id' => $this->faker->randomElement($driverIds),
			'assigned_date' => $this->faker->date(),
			'pickup_date' => $this->faker->optional()->date(),
			'delivery_date' => $this->faker->optional()->date(),
		];
	}
}