<?php

namespace App\Database\Factories;

use App\Models\Driver;

class DriverFactory extends Factory
{
	// If this model property isn't defined, Leaf will
	// try to generate the model name from the factory name
	public $model = Driver::class;

	// You define your factory blueprint here
	// It should return an associative array
	public function definition(): array
	{
		return [
			'name' => $this->faker->name,
			'contact_number' => $this->faker->phoneNumber,
			'license_number' => $this->faker->unique()->randomNumber(8),
			'vehicle_number' => $this->faker->regexify('[A-Z]{2}-[0-9]{2}-[A-Z]{2}-[0-9]{4}')
		];
	}
}