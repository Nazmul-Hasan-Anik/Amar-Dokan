@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        <h1>Add Category</h1>
    </div>
    <div class="row">
        <div class="col-md-8">
          {{-- @if(Session('success'))
          <div class="alert alert-success" role="alert">
            {{Session('success')}}
          </div>
           @endif --}}
  <div class="card-body">
    <form action="{{ url('insert-categories') }}" method="POST" enctype="multipart/form-data">
   @csrf
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for=""><b> Name:</b></label>
            <input type="text" class="form-control" name="name">
        </div>
         <div class="col-md-6 mb-3">
            <label for=""><b> Slug:</b></label>
            <input type="text" class="form-control" name="slug">
        </div>
        <div class="col-md-12 mb-3">
            <label for=""><b> Description:</b></label>
            <textarea name="description" rows="3" class="form-control" ></textarea>
        </div>
        <div class="col-md-6 mb-3">
            <label for=""><b> Status</b></label>
            <input type="checkbox"  name="status">
        </div>
        <div class="col-md-6 mb-3">
            <label for=""><b> Popular</b></label>
            <input type="checkbox"  name="popular">
        </div>
           <div class="col-md-12 ">
            <label for=""><b> Meta Title:</b></label>
            <textarea name="meta_title" rows="1" class="form-control" ></textarea>
        </div>
        
        
           <div class="col-md-12 ">
            <br>
            <label for=""> <b> Meta KeyWords:</b></label>
            <textarea name="meta_keywords" rows="1" class="form-control" ></textarea>
        </div>
         <div class="col-md-12 mb-3">
            <br>
            <label for=""> <b> Meta Description:</b></label>
            <textarea name="meta_descrip" rows="1" class="form-control" ></textarea>
        </div>
        <div class="col-md-12">
            <label for=""><b>Image</b></label>
             <br> 
            <input type="file"  name="image">
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
