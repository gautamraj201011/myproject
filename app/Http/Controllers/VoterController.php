<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\VoterDetail;


class VoterController extends Controller
{
    /*
        public function show()
        { $users=DB::table('voter_details')->where('partyid','1')->first();
    
            return view('parties.index',compact('users'));
        }*/

    public function create()
    {
        return view('voter.create');
    }


    public function store(Request $request)
    {

        $voters = new VoterDetail();
        $voters->votername = $request->get('votername');
        $voters->dob = $request->get('dob');
        $voters->state=$request->get('state');
        $voters->block=$request->get('block');
        $voters->save();
        return view('voter.show',compact('voters'));
    }
}