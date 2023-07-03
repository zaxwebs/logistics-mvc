<?php

namespace App\Models;

class Package extends Model
{
	// Relationships
	public function shipment()
	{
		return $this->belongsTo(Shipment::class);
	}
}