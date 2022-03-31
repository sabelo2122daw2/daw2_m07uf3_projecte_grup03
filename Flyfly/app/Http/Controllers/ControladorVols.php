<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vols;
use PDF;

class ControladorVols extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vols = Vols::all();
        return view('indexVols', compact('vols'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CreaVols');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouVol = $request->validate([
            'codi_unic' => 'required|max:255',
            'codi_model' => 'required|max:255',
            'ciutatOrigen' => 'required|max:255',
            'ciutatDesti' => 'required|max:255',
            'TerminalOrigen' => 'required|max:255',
            'terminalDesti' => 'required|max:255',
            'DataSortida' => 'required|date',
            'DataArribada' => 'required|date',
            'Classe' => 'required|max:255',   
        ]);
            $vols = Vols::create($nouVol);
            return redirect('/vols')->with('completed', 'Vol creat!');
            
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
        $vols = Vols::findOrFail($id);
        return view('actualitzaVols', compact('vols'));
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
            'codi_unic' => 'required|max:255',
            'codi_model' => 'required|max:255',
            'ciutatOrigen' => 'required|max:255',
            'ciutatDesti' => 'required|max:255',
            'TerminalOrigen' => 'required|max:255',
            'terminalDesti' => 'required|max:255',
            'DataSortida' => 'required|date',
            'DataArribada' => 'required|date',
            'Classe' => 'required|max:255',   
        ]);
        Vols::where('codi_unic', $id)->update($dades);
        return redirect('/vols')->with('completed', 'Vol actualitzats');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vols = Vols::findOrFail($id);
        $vols->delete();
        return redirect('/vols')->with('completed', 'Vol esborrat');
    }

    public function pdf($id){
        $vols = Vols::findOrFail($id);
        if ($vols) {
        $codi = $vols->codi_unic;
            $pdf = PDF::loadView('pdfVols', compact('codi'));
            $pdf ->setPaper('A4', 'landscape');
            return $pdf->download('vols.pdf');
        }
        
        return view('pdf', compact('vols'));
    }
}
