<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\CandidateDetail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class CandidateRegisterController extends Controller
{
    /*  public function show()
      { $users=DB::table('candidate_details')->where('candidateid','1')->first();
          return view('candidate.index',compact('users'));
      }
  */
    public function create()
    {
        return view('candidate.create');
    }


    public function store(Request $request)
    {
        try {

            $this->validate($request, [
                'candidateid' => 'bail|required|unique:posts|max:255',
                'candidatename' => 'required',
                'electionid' => 'required',
                'constituencyid' => 'required',
                'partyid' => 'required',



            ]);

            $candidate = new CandidateDetail();
            $candidate->candidateid = $request->get('candidateid');
            $candidate->candidatename = $request->get('candidatename');
            $candidate->electionid = $request->get('electionid');
            $candidate->constituencyid = $request->get('constituencyid');
            $candidate->partyid = $request->get('partyid');
            $candidate->save();
            return view('candidate.show', compact('candidate'));
        }catch (\Exception $e) {
            Session::flash('message', 'ID doesnt exist');
            Session::flash('alert-class', 'alert-danger');
            return Redirect::to('http://localhost/project/public/candidate/create')->with('msg', ' Sorry something went worng. Please try again.');
        }
        }
}