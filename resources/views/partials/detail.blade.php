@extends('layouts.common')
@section('content')
    <div class="detail">
        <h4>Product Name:{{$show_pd->product_name}}</h4>
        Product Review <br>
        <p>{{$show_pd->review}}</p>
        <div class="like">
            <button><a href="{{url('/like_pd',$show_pd->id)}}">Like</a></button> 
          
        </div>
        <div class="unlike">
            <button><a href="{{url('/unlike_pd',$show_pd->id)}}">Unlike</a></button>
           
        </div>
        <div class="voting">
            <p>voting <span>{{$show_pd->votes}}</span></p>
        </div>
    </div>
@endsection