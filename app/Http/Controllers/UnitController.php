<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function unitpage(){
        $allUnits = Unit::all();
        return view('units', compact('allUnits'));
    }

    public function addunit(Request $req){
        $req->validate([
            'unitname' => ['required', 'min:3']
        ]);

        // Unit::create([
        //     'unitName' => $req->input('unitname')
        // ]);
        $unit = new Unit();
        $unit->unitName=$req->input('unitname');
        $unit->save();

        return redirect('/units');

    }

}
