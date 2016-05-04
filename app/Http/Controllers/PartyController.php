<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Party;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

class PartyController extends Controller
{

    public function show()
    {
        $users = DB::table('parties')->where('partyid', '1')->first();

        return view('parties.index', compact('users'));
    }

    public function create()
    {
        return view('parties.create');
    }


    public function store(Request $request)
    {

        try {

            $this->validate($request, [
                'partyid' => 'bail|required|unique:posts|max:255',
                'partyname' => 'required',
                'partysymbol' => 'required',


            ]);

            $parties = new Party();
            $parties->partyid = $request->get('partyid');
            $parties->partyname = $request->get('partyname');
            $parties->partysymbol = $request->get('partysymbol');
            $parties->save();
            return view('parties.show', compact('parties'));
        } catch (\Exception $e) {
            Session::flash('message', 'ID doesnt exist');
            Session::flash('alert-class', 'alert-danger');
            return Redirect::to('http://localhost/project/public/candidate/create')->with('msg', ' Sorry something went worng. Please try again.');
        }
    }

        protected
        function formatValidationErrors(Validator $validator)
        {
            return $validator->errors()->all();
        }

    
}