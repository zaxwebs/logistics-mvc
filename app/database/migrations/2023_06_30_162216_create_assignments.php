<?php

use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;

class CreateAssignments extends Database
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (!static::$capsule::schema()->hasTable('assignments')):
			static::$capsule::schema()->create('assignments', function (Blueprint $table) {
				$table->bigIncrements('id');
				$table->foreignId('driver_id')->constrained();
				$table->date('assigned_date');
				$table->date('pickup_date')->nullable();
				$table->date('delivery_date')->nullable();
				$table->timestamps();
			});
		endif;

		// you can now build your migrations with schemas
		// Schema::build(static::$capsule, dirname(__DIR__) . '/Schema/assignments.json');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		static::$capsule::schema()->dropIfExists('assignments');
	}
}