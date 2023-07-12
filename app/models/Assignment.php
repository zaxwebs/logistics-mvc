<?php

namespace App\Models;

class Assignment extends Model
{
	// Relationships
	public function shipment()
	{
		return $this->belongsTo(Shipment::class, 'id', 'assignment_id');
	}

	public function driver()
	{
		return $this->belongsTo(Driver::class);
	}
}