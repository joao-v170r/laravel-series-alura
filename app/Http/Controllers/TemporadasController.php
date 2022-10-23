<?php

namespace App\Http\Controllers;

use App\Models\Episodio;
use App\Models\Serie;
use Illuminate\Http\Request;

class TemporadasController extends Controller
{
    public function index(int $serieId)
    {
        $serie = Serie::find($serieId);        

        $temporadas = $serie->temporadas()->with('episodios')->get();

        return view('temporadas.index')->with('temporadas', $temporadas)->with('serie', $serie);
    }
}
