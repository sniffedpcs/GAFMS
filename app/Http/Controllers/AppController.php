<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function appointpage(){
        $allAppoint = Appointment::all();
        return view('appointments', compact('allAppoint'));
    }

    public function addappointment(Request $req){
        $req->validate([
            'appointname' => ['required', 'min:2']
        ]);

        $appoint = new Appointment();
        $appoint->appointName=$req->input('appointname');
        $appoint->save();

        return redirect('/appointments');
    }
}
