<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
	use HasFactory;

	protected $table = "Participant";
	protected $primaryKey = "idParticipant";
	public $timestamps = false;

	protected $fillable = ['dateInscription', 'renouvellement'];

    public function personne(){
        return $this->hasOne('User', 'idPersonnes');
    }
}
