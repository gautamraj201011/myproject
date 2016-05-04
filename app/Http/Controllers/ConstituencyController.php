<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\ConstituencyBlockDetail;

class ConstituencyController extends Controller
{
    public function show()
    { $users=DB::table('parties')->where('partyid','1')->first();

        return view('parties.index',compact('users'));
    }

    public function create()
    {
        return view('constituency.create');
    }


    public function store(Request $request)
    {
        foreach ($_POST['blocks'] as $names)
        {
           $blocks = new ConstituencyBlockDetail();
            $blocks->electionid = $request->get('electionid');
            $blocks->constituencyid = $request->get('constituencyid');
            $users=DB::table('block_details')->where('blockid',$names+1)->first();
            $blocks->block =$users->block;
            $blocks->save();



        }


    }
}