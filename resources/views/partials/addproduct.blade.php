@extends('layouts.common')

@section('content')
    <div class="add_form">
        <form action="{{route('products.store')}}" method="POST">
            @csrf   
            <div class="name">
                <label for="pd_name">Product Name</label>
                <input type="text" id="pd_name" name="pd_name" required>
            </div>

            <div class="review">
                <label for="pd_review">Product Review</label>
                <input type="text" id="pd_review" name="pd_review" required>
            </div>

            <div class="save_btn">
                <input type="submit" name="save" value="submit">
            </div>
        </form>
    </div>
@endsection
