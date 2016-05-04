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
      try{
        $this->validate($request, [
            'year' => 'bail|required|min:2016|max:2050',
            'status' => 'required',
            'state' => 'required',
            'start' => 'bail|required|date|after:tomorrow',
            'end' => 'bail|required|date|after:start',


        ]);
        $elections = new Election();

        $elections->year = $request->get('year');
        $elections->status = $request->get('status');
        $elections->state = $request->get('state');
        $elections->start = $request->get('start');
        $elections->end = $request->get('end');
        $elections->save();
        return view('elections.show', compact('elections'));
    }catch (\Exception $e) {
        Session::flash('message', 'ID doesnt exist');
        Session::flash('alert-class', 'alert-danger');
        return Redirect::to('http://localhost/project/public/candidate/create')->with('msg', ' Sorry something went worng. Please try again.');
    }

    }

}
