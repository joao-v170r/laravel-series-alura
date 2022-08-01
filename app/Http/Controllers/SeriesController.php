<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::query()->orderBy('name')->get();
        $mensagemSucesso =  session('mensagem.sucesso');

        return view('series.index')->with('series', $series)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {   
        Serie::create($request->only('name'));

        $request->session()->flash('mensagem.sucesso', 'Série adicionada com sucesso!');

        return to_route('series.index');
    }

    public function destroy(Request $request)
    {
        Serie::destroy($request->id);

        $request->session()->flash('mensagem.sucesso', 'Série excluída com sucesso!');

        return redirect()->route('series.index');
    }
}
