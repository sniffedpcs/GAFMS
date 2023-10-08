<?php

namespace App\Http\Controllers;

use App\Models\Remark;
use Illuminate\Http\Request;

class RemarkController extends Controller
{
    public function remarkpage(){
        $allRem = Remark::all();
        return view('remarks', compact('allRem'));
    }

    public function addRemark(Request $req){

        $req->validate([
            'remarkname' => ['required', 'min:3']
        ]);

        // Unit::create([
        //     'unitName' => $req->input('unitname')
        // ]);
        $remark = new Remark();
        $remark->remark=$req->input('remarkname');
        $remark->save();

        return redirect('/remarks');

    }
}
