<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CandidateDetail;
//use App\ConstituencyBlockDetail;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;


class VoteController extends Controller
{
    //


    public function create()
    {
        return view('voting.create');
    }




    public function store(Request $request)
    {
       $candidate =$request->get('candidate');
        $voter=$request->get('voterid');
       // $candidates = DB::table('candidate_details')->where('candidateid', $candidate)->first();
       // DB::table('candidate_details')->where('candidateid', $candidate)->update(array('vote' => $candidates->vote+1));
        $voters = DB::table('voting_statuses')->where('voterid', $voter)->first();
        //return $voters->status;
        DB::table('voting_statuses')->where('voterid', $voters->voterid)->update(array('status' => $voters->status+1));
        //return $voters->status;
        return view('vote.show');

    }


    /*  public function index(Request $request)
      {

          $voters =$request->get('voterid');
          $user = DB::table('voter_details')->where('voterid', '$voters')->first();
         // return $user->state;
          return view('voting.gautam',compact('user'));
      }*/
}
