@extends('layouts.master')

@section('title', 'Voting Status')

@section('sidebar')
    @parent
    <p>Candidate Register Successfully</p>
@endsection

@section('content')
    <p><h1>CandidateID:{{$candidate->candidateid }} </h1>
    <h3> Candidate Name:{{$candidate->candidatename }} </h3>
    <h3> ElectionID:{{$candidate->electionid}}</h3></p>
    <h3> ConstituencyID:{{$candidate->constituencyid }} </h3>
    <h3> PartyID:{{$candidate->partyid}}</h3></p>

@endsection
