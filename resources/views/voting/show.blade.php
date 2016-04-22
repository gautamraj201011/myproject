
@extends('layouts.master')

@section('title', 'Voting Status')

@section('sidebar')
    @parent
@endsection

@section('content')
    <p>Choose Candidate of your preference and Click VOTE</p>

    {!! Form::open(
  array(
    'route' => 'vote.store',
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
        {!! Form::label('voterid:') !!}
        {!! Form::text('voterid', $user->voterid ,
          array(
            'class'=>'form-control',
            'placeholder'=>'voterid'
         )) !!}
        </div>

    @foreach($kmr as $kmrs)
     <p>   <h1>{{$kmrs->candidateid}}.
        {{$kmrs->candidatename}}
         {!! Form::radio('candidate', $kmrs->candidateid) !!}

     </h1> </p>
    @endforeach




    <div class="form-group">
        {!! Form::submit('VOTE',
          array('class'=>'btn btn-primary'
        ),array('')) !!}
    </div>
    {!! Form::close() !!}
    </div>


@endsection

