
@extends('layouts.master')

@section('title', 'Voting Status')

@section('sidebar')
    @parent
    <p>Successfully Registered</p>
@endsection

@section('content')
    <h1>thank you</h1>
    <p><h2>{{$voters->votername }} </h2>
    <h3> State:{{$voters->state}} </h3>
    <h3> Block:{{$voters->block}}</h3></p>
@endsection