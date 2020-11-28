<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Salle;
use App\Http\Requests\salleRequest;

class SalleController extends Controller
{
    public function index()
    {
        $listsalle = Salle::all();

        return view('Salle.index', ['salles' => $listsalle]);
    }
    public function create()
    {
        return view('Salle.create');
    }
    public function store(salleRequest $request)
    {
        $salle = new Salle();
        $salle->nomSalle = $request->input('nom');
        $salle->typeSalle = $request->input('type');
        $salle->capaciteSalle  = $request->input('capacite');
        $salle->save();

        return redirect('salle');
    }
    public function edit($id)
    {
        $salle = Salle::find($id);

        return view('Salle.edit', ['salle' => $salle]);
    }
    public function update(salleRequest $request, $id)
    {
        $salle = Salle::find($id);


        $salle->nomSalle = $request->input('nom');
        $salle->typeSalle = $request->input('type');
        $salle->capaciteSalle  = $request->input('capacite');
        $salle->save();

        return redirect('salle');
    }
    public function destroy(Request $request, $id)
    {
        $salle = Salle::find($id);

        $salle->delete();

        return redirect('salle');
    }
}
