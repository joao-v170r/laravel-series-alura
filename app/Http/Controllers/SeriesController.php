<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use App\Http\Requests\SeriesFormRequest;

class SeriesController extends Controller
{
    public function index(Request $request)
    {     
        $series = Serie::query()->orderBy('name')->get();

        $mensagem = session('mensagem.sucesso');

        return view('series.index')->with('series', $series)->with('mensagemSession', $mensagem);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    { 
        $serie = Serie::create($request->only('name'));

        return to_route('series.index')->with('mensagem.sucesso', "Série {$serie->name} adicionada com sucesso!");
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

        $nameAntigo = $serie->name;

        $serie->name = $request->name;
        $serie->save();
        
        return to_route('series.index')->with('mensagem.sucesso', "Série ($nameAntigo) passou a ser: {$serie->name} !");
    }
}
