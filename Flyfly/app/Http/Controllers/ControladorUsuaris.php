<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorUsuaris extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuaris = usuaris::all();
        return view('index', compact('usuaris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CreaUsuaris');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function CreaUsuari(Request $request)
    {
        $nouUsuari = $request->validate([
            'nom' => 'required|max:255',
            'cognoms' => 'required|max:255',
            'email' => 'required|max:255',
            'contrasenya' => 'required|max:255',
            'tipus' => 'required|max:255',
            'HoraEntrada' => 'required|date_format:H:i',
            'HoraSortida' => 'required|date_format:H:i',
            ]);
            $usuaris = usuaris::create($nouUsuari);
            return redirect('/usuaris')->with('completed', 'Usuari creat!');
            
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuaris = Usuaris::findOrFail($id);
        return view('actualitza', compact('usuaris'));
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
        $dades = $request->validate([
            'nom' => 'required|max:255',
            'cognoms' => 'required|max:255',
            'email' => 'required|max:255',
            'contrasenya' => 'required|max:255',
            'tipus' => 'required|max:255',
            'HoraEntrada' => 'required|date_format:H:i',
            'HoraSortida' => 'required|date_format:H:i',
        ]);
        Usuaris::whereId($id)->update($dades);
        return redirect('/usuaris')->with('completed', 'Usuari actualitzat');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuaris = Usuaris::findOrFail($id);
        $usuaris->delete();
        return redirect('/usuaris')->with('completed', 'Usuari esborrat');
    }
}
