@extends('layouts.master')
@section('title', 'Voting Status')
@section('sidebar')
    @parent

@endsection

@section('content')
    <h3><u>Candidate Registration</u></h3>

    {!! Form::open(
      array(
        'route' => 'candidate.store',
        'class' => 'form')
      ) !!}

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            There were some problems adding the category.<br />
            <ul>
                @foreach ($errors->all() as $error)
                    <li></li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-group">
        {!! Form::label('CandidateID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;') !!}
        {!! Form::text('candidateid', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'id'
          )) !!}</div><br>
    <div class="form-group">
        {!! Form::label('CandidateName') !!}
        {!! Form::text('candidatename', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'name'
          )) !!} </div><br>
    <div class="form-group">
        {!! Form::label('ElectionID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;') !!}
        {!! Form::text('electionid', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'id'
          )) !!} </div><br>
    <div class="form-group">
        {!! Form::label('Constituency ID &nbsp;') !!}
        {!! Form::text('constituencyid', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'id'
          )) !!}</div><br>
    <div class="form-group">
        {!! Form::label('Party ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;') !!}
        {!! Form::text('partyid', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'id'
          )) !!}
    </div><br>

    <div class="form-group">
        {!! Form::submit('ADD!',
          array('class'=>'btn btn-primary'
        )) !!}
    </div>
    {!! Form::close() !!}
    </div><br>
    @endsection


