<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Party;

class PartyController extends Controller
{

    public function show()
    { $users=DB::table('parties')->where('partyid','1')->first();

        return view('parties.index',compact('users'));
    }

    public function create()
    {
        return view('parties.create');
    }


    public function store(Request $request)
    {

        $parties = new Party();
        $parties->partyid = $request->get('partyid');
        $parties->partyname = $request->get('partyname');
        $parties->partysymbol=$request->get('partysymbol');
        $parties->save();
        return view('parties.show',compact('parties'));
    }
}