<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Election;
use Illuminate\Support\Facades\DB;
class ElectionsController extends Controller
{

     
    public function create()
    {
        return view('elections.create');
    }

    public function store(Request $request)
    {

        $elections = new Election();

        $elections->year = $request->get('year');
        $elections->status=$request->get('status');
        $elections->state=$request->get('state');
        $elections->start=$request->get('start');
        $elections->end=$request->get('end');
        $elections->save();
        return view('elections.show',compact('elections'));

    }

}
