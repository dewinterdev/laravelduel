@extends('layouts.app')
@section('content')

    <div class="container">
        <h1>Create Product</h1>
        {!! Form::open(['method'=>'PATCH', 'action'=>['App\Http\Controllers\ProductsController@update',
            $product->id],
            'files'=>false]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', $product->name,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'description:') !!}
            {!! Form::text('description', $product->description,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Edit Product', ['class'=>'btn btn-success']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection
