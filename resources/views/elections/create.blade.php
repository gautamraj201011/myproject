@extends('layouts.master')
@section('title', 'Voting Status')
@section('sidebar')
    @parent

@endsection

@section('content')
    <h1 font="bold">Create Election</h1>

    {!! Form::open(
      array(
        'route' => 'elections.store',
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
        {!! Form::label('Year') !!}
        {!! Form::selectRange('number', 2016, 2050)!!}

        {!! Form::label('Type') !!}
        {!! Form::select('status', array('State','Union'),'state') !!}

        {!! Form::label('State') !!}
        {!! Form::select('state', array('Bihar','Wb','Odisa'),'state') !!} </div>
    <div class="form-group">
        {!! Form::label('Start') !!}
        {!! Form::text('start', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'YYYY-MM-DD'
          )) !!}</div><br/>
    <div class="form-group">
        {!! Form::label('End') !!}
        {!! Form::text('end', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'YYYY-MM-DD'
          )) !!}</div><br>

    </div>
    <div class="form-group">
    <div class="form-group">
        {!! Form::submit('Create Election!',
          array('class'=>'btn btn-primary'
        )) !!}</div>
    </div>
    {!! Form::close() !!}
    </div>



@endsection


