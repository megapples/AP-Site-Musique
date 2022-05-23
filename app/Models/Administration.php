<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administration extends Model
{
	use HasFactory;

	protected $table = "Administration";
	protected $primaryKey = "idAdmin";
	public $timestamps = false;

	protected $fillable = ['service'];

    public function personne(){
        return $this->hasOne('User', 'idPersonnes');
    }
}
