<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CandidateDetail;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ResultController extends Controller
{
    public function create()
    {
        return view('result.create');
    }


    public function  store(Request $request)
    {
        $aa =$request->get('electionid');
        $bb =$request->get('constituencyid');
        $user = DB::table('candidate_details')->where('vote', DB::raw("(select max(vote) from candidate_details where electionid=$aa and constituencyid=$bb)"))->get();
        
        return view('result.show',compact('user'));
    }
}
