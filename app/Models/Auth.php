<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as BasisAuthentificatable ;

class Auth extends Model implements Authenticatable
{
    use HasFactory;
    use BasisAuthentificatable ;
    
    protected $fillable = ['nom', 'email' , 'password' , 'password_confirmation' , 'avatar'] ;

    public function taches(){
        return $this->hasMany(Tache::class) ;
    }
}
