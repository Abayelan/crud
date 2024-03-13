<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planets;

class PlanetsController extends Controller
{
    public function planetIndex(){
        $planets = Planets::all();
        $planets = Planets::paginate(2);
        return view('planets.planet', ['planets' => $planets]);
    }
    
    public function createPlanet(){
        return view('planets.create');
    }

    public function storePlanet(Request $request){
        $planetData = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'age' => 'required|numeric',
            'address' => 'required|string'
        ]);

        $newPlanet = Planets::create($planetData);
        return redirect(route('planets.planet'));
    }

    public function edit(Planets $planets){
        return view('planets.edit', ['planets' => $planets]);
    }

    public function update(Planets $planets, Request $request){
        $planetData = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'age' => 'required|string',
            'address' => 'required|string'
        ]);

        $planets->update($planetData);
        return redirect(route('planets.planet'))->with('success', 'Planets Successfully Updated');
    }

    public function destroy(Planets $planets){
        $planets->delete();
        return redirect(route('planets.planet'))->with('success', 'Planets Successfully Deleted');
    }
    
}
