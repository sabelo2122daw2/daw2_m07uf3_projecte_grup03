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
            'asseguranca' => 'required|max:255',
            'PreuVol' => 'required|max:255',
            'Checking' => 'required|max:255',
   
        ]);
            $reservas = Reserva::create($nouReserva);
            return redirect('/reservas')->with('completed', 'Reserva creada!');
            
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
        $reservas = Reserva::findOrFail($id);
        return view('actualitza', compact('reservas'));

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
        Reserva::whereId($id)->update($dades);
        return redirect('/reservas')->with('completed', 'Reserva actualitzada');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservas = Reserva::findOrFail($id);
        $reservas->delete();
        return redirect('/reservas')->with('completed', 'Reserva esborrada');
    }
}
