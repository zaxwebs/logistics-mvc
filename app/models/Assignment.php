<?php

namespace App\Models;

class Assignment extends Model
{
	// Relationships
	public function shipment()
	{
		return $this->belongsTo(Shipment::class);
	}

	public function driver()
	{
		return $this->belongsTo(Driver::class);
	}
}