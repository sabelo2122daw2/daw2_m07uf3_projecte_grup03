<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

class ControladorReservas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = Reserva::all();
        return view('indexReservas', compact('reservas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CreaReservas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouReserva = $request->validate([
            'Passaport_client' => 'required|max:255',
            'codi_unic' => 'required|max:255',
            'localitzador' => 'required|max:255',
            'NumAsiento' => 'required|max:255',
            'EquipatgeMa' => 'required|max:255',
            'EquipatgeCabina' => 'required|max:255',
            'QuantitatEquipatge' => 'required|max:255',
            'asseguranc a' => 'required|max:255',
            'PreuVol' => 'required|max:255',
            'Checking' => 'required|max:255',
   
        ]);
            $reservas = Reserva::create($nouReserva);
            return redirect('/reservas')->with('completed', 'Reserva creada!');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $Passaport_client
     * @return \Illuminate\Http\Response
     */
    public function show($Passaport_client)
    {
        return view("indexReservas");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $Passaport_client
     * @return \Illuminate\Http\Response
     */
    public function edit($Passaport_client)
    {
        $reservas = Reserva::findOrFail($Passaport_client);
        return view('actualitza', compact('reservas'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $Passaport_client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Passaport_client)
    {
        $dades = $request->validate([
            'Passaport_client' => 'required|reference:clientss',
            'codi_unic' => 'required|reference:vols',
            'localitzador' => 'required|max:255',
            'NumAsiento' => 'required|max:255',
            'EquipatgeMa' => 'required|max:255',
            'EquipatgeCabina' => 'required|max:255',
            'QuantitatEquipatge' => 'required|max:255',
            'asseguranca' => 'required|max:255',
            'PreuVol' => 'required|max:255',
            'Checking' => 'required|max:255',
        ]);
        Reserva::whereId($Passaport_client)->update($dades);
        return redirect('/reservas')->with('completed', 'Reserva actualitzada');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $Passaport_client
     * @return \Illuminate\Http\Response
     */
    public function destroy($Passaport_client)
    {
        $reservas = Reserva::findOrFail($Passaport_client);
        $reservas->delete();
        return redirect('/reservas')->with('completed', 'Reserva esborrada');
    }
}
