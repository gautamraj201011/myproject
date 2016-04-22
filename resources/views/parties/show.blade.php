



@extends('layouts.master')

@section('title', 'Voting Status')

@section('sidebar')
    @parent
    <p>Party Created Successfully</p>
@endsection

@section('content')
    <p><h1>partyID:{{$parties->partyid }} </h1>
       <h3> partyname:{{$parties->partyname }} </h3>
       <h3> partysymbol:{{$parties->partysymbol}}</h3></p>
@endsection