@extends('layouts.master')

@section('title', 'Create Constituency')

@section('sidebar')
    @parent
    <h3><u>Create Constituency</u></h3>
@endsection

@section('content')



    {!! Form::open(
    array(
    'route' => 'constituency.store',
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
        {!! Form::label('ElectionID   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;') !!}
        {!! Form::text('electionid', null,
        array(
        'class'=>'form-control',
        'placeholder'=>'id'
        )) !!} </div><br>

    <div class="form-group">
        {!! Form::label('Constituency Id   &nbsp;') !!}
        {!! Form::text('constituencyid', null,
        array(
        'class'=>'form-control',
        'placeholder'=>'name'
        )) !!}
    </div><br>


    {!! $countryList = App\BlockDetail::lists('blockid','block');  !!}

    <div class="form-group">
        {!! Form::label('Blocks  &nbsp;') !!}
        {!! Form::select('block1', $countryList); !!}
        {!! Form::select('block2', $countryList); !!}
        {!! Form::select('block3',$countryList); !!}
        {!! Form::select('block4', $countryList); !!}
        {!! Form::select('block5', $countryList); !!}
    </div><br>



    <div class="form-group">
        {!! Form::submit('ADD',
        array('class'=>'btn btn-primary'
        )) !!}
    </div>
    {!! Form::close() !!}
    </div>
@endsection