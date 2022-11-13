<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostStoreRequest;
use App\Models\Posty;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posty = Posty::all();
        return view('posty.index', compact('posty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posty.dodaj');
    }

    /**
     * Store a newly created resource in storage.
     *
     * param  \Illuminate\Http\Request  $request
     * return \Illuminate\Http\Response
     */
    /*public function store(Request $request)
    {
        //dd($request);
/*         dump($request);
        echo $request->tytul;
        $request->dump();
        sleep(2); */
        //Walidacja
        /*
        $request->validate([
            'tytul' => 'required',
            'autor' => 'required',
            'email' => 'required|email:rfc,dns',
            'tresc' => 'required|min:5'
        ]);
        return redirect()->route('posty.index')->with('message', 'Dodano poprawnie posta');
    }

    */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\PostStoreRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PostStoreRequest $request)
    {
        $posty = new Posty();
        $posty->tytul = request('tytul');
        $posty->autor = request('autor');
        $posty->email = request('email');
        $posty->tresc = request('tresc');
        $posty->save();
        return redirect()->route('posty.index')->with('message', 'Dodano poprawnie posta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Posty::findOrFail($id);
        return view('posty.post', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
