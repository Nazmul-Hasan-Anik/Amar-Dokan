@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        <h1>Edit Category</h1>
    </div>
    <div class="row">
        <div class="col-md-8">
          {{-- @if(Session('success'))
          <div class="alert alert-success" role="alert">
            {{Session('success')}}
          </div>
           @endif --}}
  <div class="card-body">
    <form action="{{url('update_cat/'.$categories->id)}}" method="POST" enctype="multipart/form-data">
   @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for=""><b> Name:</b></label>
            <input type="text" value="{{$categories->name}}" class="form-control" name="name">
        </div>
         <div class="col-md-6 mb-3">
            <label for=""><b> Slug:</b></label>
            <input type="text" value="{{$categories->slug}}" class="form-control" name="slug">
        </div>
        <div class="col-md-12 mb-3">
            <label for=""><b> Description:</b></label>
            <textarea name="description"  rows="1" 
              class="form-control" > {{$categories->description}}</textarea>
        </div>
        <div class="col-md-6 mb-3">
            <label for=""><b> Status</b></label>
            <input type="checkbox" {{ $categories->status == "1" ? 'checked':'' }} name="status">
        </div>
        <div class="col-md-6 mb-3">
            <label for=""><b> Popular</b></label>
            <input type="checkbox" {{ $categories->popular == "1" ? 'checked':'' }} name="popular">
        </div>
           <div class="col-md-12 ">
            <label for=""><b> Meta Title:</b></label>
            <textarea name="meta_title" rows="1"   class="form-control" > {{$categories->meta_title}}</textarea>
        </div>
        
        
           <div class="col-md-12 ">
            <br>
            <label for=""> <b> Meta KeyWords:</b></label>
            <textarea name="meta_keywords" rows="1"  class="form-control" >{{$categories->meta_descrip}}</textarea>
        </div>
         <div class="col-md-12 mb-3">
            <br>
            <label for=""> <b> Meta Description:</b></label>
            <textarea name="meta_descrip" rows="1"  class="form-control" > {{$categories->meta_keywords}}</textarea>
        </div>
        @if ($categories->image)
            <img src="{{ asset('asset/upload/category/'.$categories->image) }}" alt="Image Here">

        @endif

        <div class="col-md-12">
            <label for=""><b>Image</b></label>
             <br> 
            <input type="file"   name="image">
        </div>
        
        <div class="col-md-12">
            <br><br>
            <button type="submit" class="btn-btn-primary">Submit</button>
        </div>
    </div>
    </form>

  </div>

</div>




@endsection
