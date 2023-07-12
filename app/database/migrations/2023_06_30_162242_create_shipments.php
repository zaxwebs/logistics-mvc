<?php

use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;

class CreateShipments extends Database
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (!static::$capsule::schema()->hasTable('shipments')):
			static::$capsule::schema()->create('shipments', function (Blueprint $table) {
				$table->bigIncrements('id');
				$table->foreignId('user_id')->constrained();
				$table->string('number');
				$table->string('sender_name');
				$table->string('sender_address');
				$table->string('receiver_name');
				$table->string('receiver_address');
				$table->string('status');
				$table->date('estimated_delivery_date');
				$table->date('actual_delivery_date')->nullable();
				$table->unsignedBigInteger('assignment_id')->nullable();
				$table->timestamps();

				$table->foreign('assignment_id')->references('id')->on('assignments')->onDelete('set null');
			});
		endif;

		// you can now build your migrations with schemas
		// Schema::build(static::$capsule, dirname(__DIR__) . '/Schema/shipments.json');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		static::$capsule::schema()->dropIfExists('shipments');
	}
}