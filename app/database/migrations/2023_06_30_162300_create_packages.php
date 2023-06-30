<?php

use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;

class CreatePackages extends Database
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (!static::$capsule::schema()->hasTable('packages')):
			static::$capsule::schema()->create('packages', function (Blueprint $table) {
				$table->bigIncrements('id');
				$table->foreignId('shipment_id')->constrained();
				$table->string('description');
				$table->float('weight');
				$table->string('size');
				$table->boolean('fragile');
				$table->timestamps();
			});
		endif;

		// you can now build your migrations with schemas
		// Schema::build(static::$capsule, dirname(__DIR__) . '/Schema/packages.json');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		static::$capsule::schema()->dropIfExists('packages');
	}
}