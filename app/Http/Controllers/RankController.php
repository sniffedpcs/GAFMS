<?php

namespace App\Http\Controllers;

use App\Models\Rank;
use Illuminate\Http\Request;

class RankController extends Controller
{
    public function rankpage(){
        $allRank = Rank::all();
        return view('ranks', compact('allRank'));
    }

    public function addRank(Request $req){
        
        $req->validate([
            'rankname' => ['required', 'min:2']
        ]);

        $rank = new Rank();
        $rank->rank=$req->input('rankname');
        $rank->save();

        return redirect('/ranks');
    }
}
