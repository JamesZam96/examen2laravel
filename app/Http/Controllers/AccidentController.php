<?php

namespace App\Http\Controllers;

use App\Models\Accident;
use App\Models\Person;
use Illuminate\Http\Request;

class AccidentController extends Controller
{
    //
    public function index(){
        $accidents = Accident::orderBy('id','desc')->get();
        return view("accidents.list",compact('accidents'));
    }

    public function create(){
        $people = Person::all();
        return view('accidents.create',compact('people'));
    }

    public function store(Request $request){
        $accident = new Accident();
        $accident->time = $request->time;
        $accident->code = $request->code;
        $accident->date = $request->date;
        $accident->place = $request->place;
        $accident->person_id = $request->person_id;
        $accident->save();
        return response('Se ha registrado correctamente',200);
    }

    public function show(Accident $accident){
        return view('accidents.show',compact('accident'));
    }

    public function edit(Accident $accident){
        $people = Person::all();
        return view('accidents.edit',compact('accident','people'));
    }

    public function update(Request $request, Accident $accident){
        $accident->time = $request->time;
        $accident->code = $request->code;
        $accident->date = $request->date;
        $accident->place = $request->place;
        $accident->person_id = $request->person_id;
        $accident->save();
        return response('Se ha actualizado correctamente',200);
    }

    public function destroy(Accident $accident){
        $accident->delete();
        return response('Se ha eliminado correctamente',200);
    }
}
