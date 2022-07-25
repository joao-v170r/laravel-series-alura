<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    //
    public function index ()
    {   
        $mySeries = ['Stranger Thigns', 'test ', 'teskfkeo'];

        return view('series.index')->with('mySeries', $mySeries);
    }

    public function create()
    {
        return view('series.create');
    }
}
