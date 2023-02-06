<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as BasisAuthentificatable ;
use Illuminate\Notifications\Notifiable;

class Auth extends Model implements Authenticatable
{
    use HasFactory, Notifiable;
    use BasisAuthentificatable ;
    
    protected $fillable = ['nom', 'email' , 'password' , 'password_confirmation' , 'avatar'] ;

    public function taches(){
        return $this->hasMany(Tache::class) ;
    }


    public function invites(){
        return $this->belongsToMany(Auth::class , 'invites' ,'inviteur_id' , 'invite_id',);
    }
}
