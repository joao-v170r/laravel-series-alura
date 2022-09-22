<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    protected $table = 'series';

    protected $fillable = ['name'];

    public function temporadas()
    {
        return $this->hasMany(Temporada::class, 'serie_id');        
    }
}
