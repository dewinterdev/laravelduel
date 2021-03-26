@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="col-md-10 offset-1">
            <h1><span class="badge badge-info display-1 shadow"><i class="fas fa-blog"></i>Posts</span></h1>
            <h3><span class="badge badge-success display-1 shadow my-2">
            <i class="fas fa-plus"></i>
            <a class="text-white text-decoration-none" href="{{route('posts.create')}}">Add New</a></span>
            </h3>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Created</th>
                    <th scope="col">Updated</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @if($posts)
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->name}}</td>
                            <td>{{$post->subject}}</td>
                            <td>{{$post->created_at->diffForHumans()}}</td>
                            <td>{{$post->updated_at->diffForHumans()}}</td>
                            <td><a class="btn btn-warning" href="{{route('posts.edit', $post->id)}}">Edit</a></td>
                            <td>
                                {!! Form::open(['method'=>'DELETE',
                                   'action'=>['App\Http\Controllers\AdminPostsController@destroy', $post->id]]) !!}
                                <div class="form-group">
                                    {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                </div>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>

@stop




