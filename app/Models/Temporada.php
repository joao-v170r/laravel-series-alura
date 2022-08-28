<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    use HasFactory;

    protected $table = 'temporadas';

    protected $fillable = ['numero', 'serie_id'];

    public function serie()
    {
        return $this->belongsTo(Serie::class, 'serie_id');
    }

    public function episodios()
    {
        return $this->hasMany(Episodio::class, 'temporada_id');
    }
}
