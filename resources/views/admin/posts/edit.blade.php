@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-10 offset-md-1">
            <h1>Edit Post</h1>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-8 img-thumbnail">
                            {!! Form::open(['method'=>'PATCH','action'=>['App\Http\Controllers\AdminPostsController@update',
                            $post->id], 'files'=>true]) !!}
                            <div class="form-group">
                                {!! Form::label('title', 'Title') !!}
                                {!! Form::text('title', $post->title,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('name', 'Name') !!}
                                {!! Form::text('name', $post->name,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('subject', 'Subject') !!}
                                {!! Form::text('subject', $post->subject,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::submit('Update Post', ['class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
