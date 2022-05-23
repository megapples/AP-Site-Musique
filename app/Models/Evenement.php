<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
	use HasFactory;

	protected $table = "Evenement";
	protected $primaryKey = "idEvent";
	public $timestamps = false;

	protected $fillable = ['absents', 'libelleEvenement', 'lieu', 'travail', 'type'];
    
}
