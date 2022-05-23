<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'Table_Personnes';
    protected $primaryKey = 'idPersonnes';
    public $timestamps =  false;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nom',
        'prenom',
        'emailPersonne',
        'dateEntree',
        'pswd',
        'pseudo',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'pswd',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAuthPassword(){
        return $this->pswd;
    }

    //TP4

    public function entraineur(){
        return $this->hasOne(Entraineur::class, 'idPersonnes');
    }

    public function administration(){
        return $this->hasOne(Administration::class, 'idPersonnes');
    }

    public function participant(){
        return $this->hasOne(Participant::class, 'idPersonnes');
    }
}
