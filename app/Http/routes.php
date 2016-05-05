<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('elections','ElectionsController');
Route::resource('parties','PartyController');
Route::resource('voter','VoterController');
Route::resource('candidate','CandidateRegisterController');

Route::resource('voting','VotingController');
Route::resource('test','TestController');
Route::resource('vote','VoteController');
Route::resource('verification','VerificationController');
Route::resource('result','ResultController');
//commit 4




