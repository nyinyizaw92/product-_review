@extends('layouts.common')
@section('content')
   
    <div class="eidt">
        <h5>Edit Product</h5>
        <form action="{{url('/edit_page',$edit_pd->id)}}" method="POST">
            @csrf
            <input type="hidden" name="pd_id" value="{{ $edit_pd->id }}">
             <div class="name">
                <label for="pd_name">Product Name</label>
                <input type="text" name="pd_name" id="pd_name" value="{{ $edit_pd->product_name }}">
             </div>

             <div class="review">
                <label for="pd_review">Product Name</label>
                <input type="text" name="pd_review" id="pd_review" value="{{ $edit_pd->review}}">
             </div>
             <div class="edit_btn">
                <input type="submit" name="edit" value="update">
             </div>
        </form>
    </div>
@endsection 