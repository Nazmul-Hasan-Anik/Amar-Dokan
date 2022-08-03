@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        <h1>Edit Product</h1>
    </div>
    <div class="row">
        <div class="col-md-8">
          {{-- @if(Session('success'))
          <div class="alert alert-success" role="alert">
            {{Session('success')}}
          </div>
           @endif --}}
  <div class="card-body">
    <form action="{{ url('update-products/'.$products->id) }}" method="POST" enctype="multipart/form-data">
   @csrf
   @method('PUT')
    <div class="row">
        <div class="col md-12 mb-3">
            <select class="form-select"  >
            <option value="">{{ $products->categories->name }}</option>
            
            
            </select>

        </div>
        <div class="col-md-6 mb-3">
            <br> <br> <br> <br>
            <label for=""><b> Name:</b></label>
            <input type="text" class="form-control" value="{{ $products->name }}" name="name">
        </div>
         <div class="col-md-6 mb-3">
            <label for=""><b> Slug:</b></label>
            <input type="text" class="form-control" value="{{ $products->slug }}" name="slug">
        </div>
        <div class="col-md-12 mb-3">
            <label for=""><b> Small Description:</b></label>
            <textarea name="small_description" rows="1" {{ $products->small_description }}"class="form-control" > {{ $products->small_description }} </textarea>
        </div>
        <div class="col-md-12 mb-3">
            <label for=""><b> Description:</b></label>
            <textarea name="description" rows="1" {{ $products->description }} class="form-control" > {{ $products->description }} </textarea>
        </div>
        <div class="col-md-6 mb-3">
            <label for=""><b> Original Price</b></label>
            <input type="number" class="form-control" value="{{ $products->original_price }}"  name="original_price">
        </div>
        <div class="col-md-6 mb-3">
            <label for=""><b> Selling Price</b></label>
            <input type="number" class="form-control" value="{{ $products->selling_price }}"  name="selling_price">
        </div>
        <div class="col-md-6 mb-3">
            <label for=""><b> Tax</b></label>
            <input type="number" class="form-control" value="{{ $products->tax }}"  name="tax">
        </div>
        
        <div class="col-md-6 mb-3">
            <label for=""><b> Quantity</b></label>
            <input type="number" class="form-control" value="{{ $products->qty}}"  name="qty">
        </div>
        <div class="col-md-6 mb-3">
            <label for=""><b> Status</b></label>
            <input type="checkbox" {{ $products->status == "1" ? 'checked':'' }}    name="status">
        </div>
        <div class="col-md-6 mb-3">
            <label for=""><b> Trending</b></label>
            <input type="checkbox" {{ $products->trending == "1" ? 'checked':'' }}  name="trending">
        </div>
           <div class="col-md-12 ">
            <label for=""><b> Meta Title:</b></label>
            <textarea name="meta_title" rows="1" class="form-control" > {{ $products->meta_title }} </textarea>
        </div>
        
        
         
         <div class="col-md-12 mb-3">
            <br>
            <label for=""> <b> Meta Description:</b></label>
            <textarea name="meta_description" rows="1" class="form-control" > {{ $products->meta_description }} </textarea>
        </div>
        <div class="col-md-12 mb-3">
            <br>
            <label for=""> <b> Meta Keyword:</b></label>
            <textarea name="meta_keyword" rows="1" class="form-control" > {{ $products->meta_keyword }} </textarea>
        </div>
        @if ($products->image)
            <img src="{{ asset('asset/upload/product/'.$products->image) }}" alt="Image Here">

        @endif 
        <div class="col-md-12">
            <label for=""><b>Image</b></label>
             <br> 
            <input type="file"  name="image">
        </div>
        
        <div class="col-md-12">
            <br><br>
            <button type="submit" class="btn-btn-primary">Update</button>
        </div>
    </div>
    </form>

  </div>

</div>




@endsection
