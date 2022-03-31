<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuaris;
use PDF;

class ControladorUsuaris extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuaris = Usuaris::all();
        return view('indexUsuaris', compact('usuaris'));
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
    public function store(Request $request)
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
            $usuaris = Usuaris::create($nouUsuari);
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
        $usuaris = Usuaris::findOrFail($id);
        return view('actualitzaUsuaris', compact('usuaris'));
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
        Usuaris::where('email', $id)->update($dades);
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

    public function pdf($id){
        $usuaris = Usuaris::findOrFail($id);
        if ($usuaris) {
        $email = $usuaris->email;
            $pdf = PDF::loadView('pdfUsuaris', compact('email'));
            $pdf ->setPaper('A3', 'landscape');
            return $pdf->download('usuaris.pdf');
        }
        
        return view('pdf', compact('usuaris'));
    }
}
