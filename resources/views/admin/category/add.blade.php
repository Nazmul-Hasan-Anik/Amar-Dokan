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
    <form action="{{ url('insert-category') }}" method="POST" enctype="multipart/form-data">
   
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
         <div class="col-md-6 mb-3">
            <label for="">Slug</label>
            <input type="text" class="form-control" name="slug">
        </div>
        <div class="col-md-12 mb-3">
            <label for="">Description</label>
            <textarea name="description" rows="3" class="form-control" ></textarea>
        </div>
        <div class="col-md-6 mb-3">
            <label for="">Status</label>
            <input type="checkbox"  name="status">
        </div>
        <div class="col-md-6 mb-3">
            <label for="">Popular</label>
            <input type="checkbox"  name="popular">
        </div>
           <div class="col-md-12 mb-3">
            <label for="">Meta Title</label>
            <textarea name="meta_title" rows="3" class="form-control" ></textarea>
        </div>
         <div class="col-md-12 mb-3">
            <label for="">Meta Description</label>
            <textarea name="meta_descrip" rows="3" class="form-control" ></textarea>
        </div>
        <div class="col-md-12">
            <label for="">Image</label>
             <br> 
            <input type="file"  name="image">
        </div>
        
        <div class="col-md-12">
            
            <button type="submit" class="btn-btn-primary">Submit</button>
        </div>
    </div>
    </form>

  </div>

</div>




@endsection
