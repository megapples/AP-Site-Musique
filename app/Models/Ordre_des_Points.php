<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordre_des_Points extends Model
{
	use HasFactory;

	protected $table = "Ordre_des_Points";
	protected $primaryKey = "idOrdre";
	public $timestamps = false;
}
