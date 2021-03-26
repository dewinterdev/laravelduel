@extends('layouts.app')
@section('content')
            <h1>All Products</h1>
            <a href="{{route('products.create')}}" class="btn btn-success mb-2 ml-2">create a new product</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Body</th>
                    <th scope="col">Created</th>
                    <th scope="col">Updated</th>
                    <th scope="col" colspan="2">Actions</th>
                </tr>
                </thead>
                <tbody>
                @if($products)
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name ? $product->name : 'name unknown'}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->created_at->diffForHumans()}}</td>
                            <td>{{$product->updated_at->diffForHumans()}}</td>
                            <td class="d-flex">
                                <a class="btn btn-primary mr-2" href="{{route('products.edit', $product->id)}}">Edit</a>
                                {!! Form::open(['method'=>'DELETE','action'=>['App\Http\Controllers\ProductsController@destroy',$product->id]]) !!}
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
@endsection
