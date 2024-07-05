<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amizade extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_inicio', 'usuario1_id', 'usuario2_id', 'status',
    ];

    public function initiator()
    {
        return $this->belongsTo(User::class, 'usuario1_id');
    }
    public function receiver()
    {
        return $this->belongsTo(User::class, 'usuario2_id');
    }
}
