<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\VoterDetail;
//use App\CandidateDetail;
//use App\ConstituencyBlockDetail;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class VerificationController extends Controller
{



    public function create()
    {
        return view('verification.create');
    }
    public function store(Request $request)
    {

        try{

            $voters =$request->get('voterid');
            $user = DB::table('voting_statuses')->where('voterid', $voters)->first();
            $aa=$user->Estatus;
           if ($aa!=1)
           {
               $bb=$user->status;

               if($bb!=1)
               {
                   DB::table('voting_statuses')->where('voterid', $voters)->update(array('token' => $user->token+rand()));
                   $user = DB::table('voting_statuses')->where('voterid', $voters)->first();
                   return "VoterID:".$user->voterid."<br>TokenNO:".$user->token;
               }
               else
               {
                   return 'oops';
               }


           }
            else
            {
                return 'oops';
            }


            } catch (\Exception $e) {
            Session::flash('message', 'Wrong Input');
            Session::flash('alert-class', 'alert-danger');
            return Redirect::to('http://localhost/project/public/voting/create')->with('msg', ' Sorry something went worng. Please try again.');
        }
    }

}
