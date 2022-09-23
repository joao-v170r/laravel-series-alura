<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use App\Http\Requests\SeriesFormRequest;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::query()->orderBy('nome')->get();

        #$temporadas = $series->temporadas;

        $mensagem = session('mensagem.sucesso');

        return view('series.index')->with('series', $series)->with('mensagemSession', $mensagem);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {
        $serie = Serie::create($request->only('nome'));

        for($numeroTemp = 1; $numeroTemp <= $request->numbTemporadas; $numeroTemp++){
            /**
             * @var \App\Models\Temporada $temporada
             */
            $temporada = $serie->temporadas()->create(['numero' => $numeroTemp]);

            for($numeroEp = 1; $numeroEp <= $request->numbEpisodios; $numeroEp++){
                $temporada->episodios()->create(['numero' => $numeroEp]);
            }
        }

        return to_route('series.index')->with('mensagem.sucesso', "Série {$serie->nome} adicionada com sucesso!");
    }

    public function destroy(int $idSerie)
    {
        $qntDelet = Serie::destroy($idSerie);
        
        $mensagem = $qntDelet > 0 ? "Série excluída com sucesso!" : "Série não encontrada!";

        return to_route('series.index')->with('mensagem.sucesso', $mensagem);
    }

    public function edit(int $idSerie)
    {
        $serie = Serie::find($idSerie);
        
        if (!$serie) {
            return to_route('series.index')->with('mensagem.sucesso', "Série não encontrada!");
        }
        
        return view('series.edit')->with('serie', $serie);
    }

    public function update(SeriesFormRequest $request, int $idSerie)
    {   
        $serie = Serie::find($idSerie);

        $nomeAntigo = $serie->nome;

        $serie->nome = $request->nome;
        $serie->save();

        return to_route('series.index')->with('mensagem.sucesso', "Série ($nomeAntigo) passou a ser: {$serie->nome} !");
    }
}
