<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Episodio;

class EpisodiosController extends Controller
{
    public function index(Request $request)
    {
        $series = Episodio::query()->orderBy('nome')->get();

        #$temporadas = $series->temporadas;

        $mensagem = session('mensagem.sucesso');

        return view('series.index')->with('series', $series)->with('mensagemSession', $mensagem);
    }
}
