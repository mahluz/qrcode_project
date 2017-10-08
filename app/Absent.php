<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absent extends Model {
	protected $fillable = ['people_id', 'date_absent', 'status', 'bill'];
}
