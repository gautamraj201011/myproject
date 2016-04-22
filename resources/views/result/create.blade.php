@extends('layouts.master')
@section('title', 'Voting Status')
@section('sidebar')
    @parent

@endsection

@section('content')
    <h1 font="bold">Create Election</h1>

    {!! Form::open(
      array(
        'route' => 'result.store',
        'class' => 'form')
      ) !!}

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            There were some problems adding the category.<br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li></li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-group">
        {!! Form::label('ElectionID') !!}
        {!! Form::text('electionid', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'electionid'
          )) !!}</div><br/>
    <div class="form-group">
        {!! Form::label('ConstituencyID') !!}
        {!! Form::text('constituencyid', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'type'
          )) !!} </div><br/>

    <div class="form-group">
        <div class="form-group">
            {!! Form::submit('Create Election!',
              array('class'=>'btn btn-primary'
            )) !!}</div>
    </div>
    {!! Form::close() !!}
    </div>
@endsection
