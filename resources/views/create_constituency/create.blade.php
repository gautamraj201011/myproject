

@extends('layouts.master')

@section('title', 'Voting Status')

@section('sidebar')
    @parent
    <h3><u>Add Party</u></h3>
@endsection

@section('content')
    <h1>Create Party</h1>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    {!! Form::open(
      array(
        'route' => 'create_constituency.store',
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
        {!! Form::label('Election ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;') !!}
        {!! Form::text('electionid', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'name'
          )) !!} </div><br>

    <div class="form-group">
        {!! Form::label('Constituency Name &nbsp;') !!}
        {!! Form::text('constituencyname', null,
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
