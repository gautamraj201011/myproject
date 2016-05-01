

@extends('layouts.master')

@section('title', 'Voting Status')

@section('sidebar')
    @parent
    <h3><u>Add Party</u></h3>
@endsection

@section('content')



    {!! Form::open(
      array(
        'route' => 'parties.store',
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
        {!! Form::label('PartyID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;') !!}
        {!! Form::text('partyid', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'name'
          )) !!} </div><br>
    <div class="form-group">
        {!! Form::label('PartyName &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;') !!}
        {!! Form::text('partyname', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'name'
          )) !!}</div><br>
    <div class="form-group">
        {!! Form::label('Party Symbol &nbsp;') !!}
        {!! Form::text('partysymbol', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'type'
          )) !!}
    </div><br>




    <div class="form-group">
        {!! Form::submit('ADD',
          array('class'=>'btn btn-primary'
        )) !!}
    </div>
    {!! Form::close() !!}
    </div>
@endsection
