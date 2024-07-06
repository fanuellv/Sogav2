<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postagem extends Model
{
    use HasFactory;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'texto',
        'imagem'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
    public function comentarios()
{
    return $this->hasMany(Comentario::class);
}

}
