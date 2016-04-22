<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\CandidateDetail;
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

        $candidate = new CandidateDetail();
        $candidate->candidateid = $request->get('candidateid');
        $candidate->candidatename = $request->get('candidatename');
        $candidate->electionid = $request->get('electionid');
        $candidate->constituencyid = $request->get('constituencyid');
        $candidate->partyid = $request->get('partyid');
        $candidate->save();
        return view('candidate.show',compact('candidate')) ;
    }
}