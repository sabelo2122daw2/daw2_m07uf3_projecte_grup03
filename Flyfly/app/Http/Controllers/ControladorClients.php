<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;

class ControladorClients extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Clients::all();
        return view('indexClients', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CreaClients');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouClient = $request->validate([
            'Passaport_client' => 'required|max:255',
            'Nom_cognoms' => 'required|max:255',
            'Edat' => 'required|max:255',
            'Telefon' => 'required|max:255',
            'Adreça' => 'required|max:255',
            'Ciutat' => 'required|max:255',
            'Pais' => 'required|max:255',
            'Email' => 'required|max:255',
            'Tipus_tajeta' => 'required|max:255',   
            'Numero_tajeta' => 'required|max:255',   
        ]);
            $clients = Clients::create($nouClient);
            return redirect('/clients')->with('completed', 'Client creat!');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clients = Clients::findOrFail($id);
        return view('actualitza', compact('clients'));
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
            'Passaport_client' => 'required|max:255',
            'Nom_cognoms' => 'required|max:255',
            'Edat' => 'required|max:255',
            'Telefon' => 'required|max:255',
            'Adreça' => 'required|max:255',
            'Ciutat' => 'required|max:255',
            'Pais' => 'required|max:255',
            'Email' => 'required|max:255',
            'Tipus_tajeta' => 'required|max:255',   
            'Numero_tajeta' => 'required|max:255', 
            ]);
            Clients::whereId($id)->update($dades);
            return redirect('/clients')->with('completed', 'Client actualitzat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clients = Clients::findOrFail($id);
        $clients->delete();
        return redirect('/clients')->with('completed', 'Client esborrat');
    }
}
