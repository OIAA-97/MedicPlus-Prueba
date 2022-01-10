<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Lab404\Impersonate\Models\Impersonate;
use Vinkla\Hashids\Facades\Hashids;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Impersonate, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
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

    protected $appends = [
        'hashid'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    //SE CREA EL METODO 'getHashidAttribute'
    public function getHashidAttribute($id)
    {
        return Hashids::encode($this->attributes['id']);
        //return \Hashids::encode($id);
        //return $this->hashids();
    }

    //SE CREA EL METODO ESTATICO 'findHashed' DE ID

    public static function findHashed($id)
    {
        $decoded = Hashids::decode($id);
        return User::findOrFail($decoded[0]);
    }

    public function canBeImpersonated()
    {
        return true;
    }
    
}
