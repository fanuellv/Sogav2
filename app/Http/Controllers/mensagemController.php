<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class mensagemController extends Model
{
    
    protected $fillable = [
        'texto', 'usuario_id1', 'usuario_id2'
    ];

    public function usuario1()
    {
        return $this->belongsTo(User::class, 'usuario_id1');
    }

    public function usuario2()
    {
        return $this->belongsTo(User::class, 'usuario_id2');
    }
}
