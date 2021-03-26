@extends('layouts.app')
<div class="container">
    <div class="col-md-10 offset-md-1">
        @section('content')
            <h1>Create Post</h1>
            {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\AdminPostsController@store','files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('Name: ')!!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Title: ')!!}
                {!! Form::text('title',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Subject: ')!!}
                {!! Form::text('subject',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
    </div>
</div>
@stop
