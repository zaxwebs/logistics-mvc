<?php

namespace App\Models;

class Shipment extends Model
{
	// Relationships
	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function packages()
	{
		return $this->hasMany(Package::class);
	}

	public function assignments()
	{
		return $this->hasMany(Assignment::class);
	}
}