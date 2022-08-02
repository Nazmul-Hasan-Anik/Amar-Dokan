@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        <h4>Category Page</h4>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </thead>

            <tbody>
                @foreach ( $categories as $category )


                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                      <img src="{{ asset('asset/upload/category/'.$category->image) }}" class="cat-img" alt="Image Here">
                    </td>
                    <td> <a href="{{route('edit.cat',$category->id)}}">
                      <button class="btn btn-primary">   Edit </button> </a>
                      <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>


    </div>

</div>




@endsection
