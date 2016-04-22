<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\VoterDetail;
use App\CandidateDetail;
//use App\ConstituencyBlockDetail;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class VotingController extends Controller
{


    public function create()
    {
        return view('voting.create');
    }

    public function store(Request $request)
    {

        $voters = $request->get('voterid');
        $tokens = $request->get('token');
        try {
            $check = DB::table('voting_statuses')->where('voterid', $voters)->first();

            if ($tokens != $check->token) {
                return 'oops';
            } else {

                try {
                    $user = DB::table('voter_details')->where('voterid', $voters)->first();
                    $aa = $user->block;
                    //return $aa;
                    $ash = DB::table('constituency_block_details')->where('block', $aa)->first();
                    $bb = $ash->constituencyid;
                    $kmr = DB::table('candidate_details')->where('constituencyid', $bb)->get();
                    //return $kmr->candidatename;
                    return view('voting.show', compact('kmr'),compact('user'));
                } catch (\Exception $e) {
                    Session::flash('message', 'Wrong Input');
                    Session::flash('alert-class', 'alert-danger');
                    return Redirect::to('http://localhost/project/public/voting/create')->with('msg', ' Sorry something went worng. Please try again.');
                }
            }

        } catch (\Exception $e) {
            Session::flash('message', 'ID doesnt exist');
            Session::flash('alert-class', 'alert-danger');
            return Redirect::to('http://localhost/project/public/voting/create')->with('msg', ' Sorry something went worng. Please try again.');

        }

    }
}