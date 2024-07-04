<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'numero', 'dataNascimento', 'biografia', 'fotoPerfil',
        'curso', 'ano', 'municipio', 'bairro', 'femenino', 'masculino',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function initiatedFriendships()
    {
        return $this->hasMany(Amizade::class, 'usuario1_id');
    }

    public function receivedFriendships()
    {
        return $this->hasMany(Amizade::class, 'usuario2_id');
    }

    public function friends()
    {
        $initiatedFriendships = $this->initiatedFriendships()->where('status', 'aceito')->pluck('usuario2_id');
        $receivedFriendships = $this->receivedFriendships()->where('status', 'aceito')->pluck('usuario1_id');

        return User::whereIn('id', $initiatedFriendships)->orWhereIn('id', $receivedFriendships)->get();
    }

    public function pendingFriendRequests()
    {
        return $this->receivedFriendships()->where('status', 'espera')->with('initiator')->get();
    }

    public function sentFriendRequests()
    {
        return $this->initiatedFriendships()->where('status', 'espera')->get();
    }
}
