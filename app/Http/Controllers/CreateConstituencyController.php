<?php

namespace App\Http\Controllers;

use App\ConstituencyDetail;
use Illuminate\Http\Request;

use App\Http\Requests;

class CreateConstituencyController extends Controller
{
    //
    public function create()
    {
        return view('create_constituency.create');
        
    }



    public function store(Request $request)
    {
        $cons = new ConstituencyDetail();
        $cons->constituencyname = $request->get('constituencyname');
        $cons->electionid = $request->get('electionid');
       // $cons->save();
        return view('constituency.create', compact('cons'));
       // return  $cons->constituencyname;

    }

}
