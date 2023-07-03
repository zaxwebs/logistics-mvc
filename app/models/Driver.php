<?php

namespace App\Models;

class Driver extends Model
{
	// Relationships
	public function assignments()
	{
		return $this->hasMany(Assignment::class);
	}
}