<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entraineur extends Model
{
	use HasFactory;

	protected $table = "Entraineur";
	protected $primaryKey = "idEntraineur";
	public $timestamps = false;

	protected $fillable = ['specialite', 'dernierDiplome', 'anneesExperience'];

    public function personne(){
        return $this->hasOne('User', 'idPersonnes');
    }
}
