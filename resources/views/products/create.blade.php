@extends('layouts.app')
@section('content')

    <div class="container">
        <h1>Create Product</h1>
        {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\ProductsController@store',
    'files'=>true]) !!}
        <div class="form-group row">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null,['class'=>'form-control']) !!}
            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('description', null,['class'=>'form-control']) !!}
            {!! Form::submit('Create Product', ['class'=>'btn btn-success']) !!}

        </div>
        {!! Form::close() !!}
    </div>
@endsection
