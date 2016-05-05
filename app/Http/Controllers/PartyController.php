<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Party;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

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
                'partyid' => 'bail|required|unique:parties,partyid',
                'partyname' => 'bail|required|unique:parties,partyname',
                'partysymbol' => 'bail|required|unique:parties,partysymbol',
            ]);
            $parties = new Party();
            $parties->partyid = $request->get('partyid');
            $parties->partyname = $request->get('partyname');
            $parties->partysymbol = $request->get('partysymbol');
            $parties->save();
            return view('parties.show', compact('parties'));
            } catch (\Exception $e) {
            Session::flash('message', 'Invalid Entry , Enter again');
            Session::flash('alert-class', 'alert-danger');
            return Redirect::to('http://localhost/project/public/parties/create');
        }
    }
}