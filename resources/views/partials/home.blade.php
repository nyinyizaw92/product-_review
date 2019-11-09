@extends('layouts.common')
@section('content')

    <div class="home">
        <div class="header">
            <h4>Product Review List</h4>
            <button><a href="{{route('products.index')}}">Add New</a></button>
        </div>
        @foreach($pd_list as $product)
        <div class="product_list">
            <h5>{{$product->product_name}}</h5>
            <p>{{$product->review}}</p>
            <div class="show">
                <a href="{{ route('products.show',$product->id) }}">Show</a>
            </div>
            <div class="edit">
                <a href="{{ url('edit_pd',$product->id) }}">Edit</a>
            </div>
            <div class="delete">
                {!! Form::open([
                "method" => "delete",
                "route" => ["products.destroy", $product->id]
                ])!!}
                
                
                {!! Form::submit('delete') !!}
                    {!! Form::close() !!}
            </div>
        </div>
        @endforeach
    </div>
@endsection
      

