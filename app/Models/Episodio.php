<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    use HasFactory;

    protected $table = 'episodios';

    protected $fillable = ['nome', 'numero', 'temporada_id'];

    public function temporada()
    {
        return $this->belongsTo(Temporada::class);
    }
}
