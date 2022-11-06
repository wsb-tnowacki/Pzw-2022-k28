<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontrolerStart extends Controller
{
    public function start()
    {
        return view('start.welcome');
    }
    public function kontakt()
    {
        $zadania =[
            'Zadanie 1',
            'Zadanie 2',
            'Zadanie 3'
        ];

        $taski =[
            'Task 1',
            'Task 2',
            'Task 3'
        ];
        $id = 34232;
        $tekst = "Tekst";
        //return view('kontakt', ['zadania' => $zadania]);
        //return view('kontakt', compact('zadania'));
        //return view('kontakt')->with('zadanka',$zadania);
        //return view('kontakt', compact('zadania','taski'));
        //return view('kontakt')->with('zadania',$zadania)->with('taski',$taski);
        return view('start.kontakt',compact('zadania','id','tekst'))->with('taski',$taski);
    }

    public function kontakt_dane($id, $tekst)
    {
        return view('start.kontakt', compact('id','tekst'));
    }

    public function onas()
    {
        return view('start.onas');
    }
}
