<?php

use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;

class CreateDrivers extends Database
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (!static::$capsule::schema()->hasTable('drivers')):
			static::$capsule::schema()->create('drivers', function (Blueprint $table) {
				$table->bigIncrements('id');
				$table->timestamps();
				$table->string('name');
				$table->string('contact_number');
				$table->string('license_number');
				$table->string('vehicle_number');
			});
		endif;

		// you can now build your migrations with schemas
		// Schema::build(static::$capsule, dirname(__DIR__) . '/Schema/drivers.json');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		static::$capsule::schema()->dropIfExists('drivers');
	}
}