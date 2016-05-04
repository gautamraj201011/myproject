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


    {!! $blockList = App\BlockDetail::where('stateid','1')->lists('block')  !!}


    <div class="form-group">
        {!! Form::label('Blocks') !!}<br />
        {!! Form::select('blocks[]',
        $blockList,
        null,
        ['class' => 'form-control',
        'multiple' => 'multiple']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('ADD',
          array('class'=>'btn btn-primary'
        )) !!}
    </div>
    {!! Form::close() !!}
    </div>
@endsection