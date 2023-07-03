<?php

namespace App\Database\Factories;

use App\Models\User;
use App\Models\Shipment;

class ShipmentFactory extends Factory
{
	// If this model property isn't defined, Leaf will
	// try to generate the model name from the factory name
	public $model = Shipment::class;


	// You define your factory blueprint here
	// It should return an associative array
	public function definition(): array
	{
		$statusOptions = ['Pending', 'In Transit', 'Delivered'];
		$userIds = User::pluck('id')->all();

		return [
			'user_id' => $this->faker->randomElement($userIds),
			'number' => $this->faker->unique()->randomNumber(6),
			'sender_name' => $this->faker->name,
			'sender_address' => $this->faker->address,
			'receiver_name' => $this->faker->name,
			'receiver_address' => $this->faker->address,
			'status' => $this->faker->randomElement($statusOptions),
			'estimated_delivery_date' => $this->faker->date(),
			'actual_delivery_date' => $this->faker->optional()->date(),
		];
	}
}