@extends('layouts.admin')
@section('content')

      @if(Session('success'))
      <div class="alert alert-success" role="alert">
        {{Session('success')}}
      </div>


      @endif

<div class="card">
    <div class="card-header">
        <h4>Product Page</h4>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Category</th>
                <th>Name</th>
                
                
                <th>Selling Price</th>
                <th>Image</th>
                <th>Action</th>
            </thead>

            <tbody>
                @foreach ( $products as $product )


                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->categories->name }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->selling_price }}</td>
                    <td>
                      <img src="{{ asset('asset/upload/product/'.$product->image) }}" class="cat-img" alt="Image Here">
                    </td>
                    <td> <a href="{{route('edit.product',$product->id)}}">
                      <button class="btn btn-primary">   Edit </button> </a>
                      <a href="{{route('delete.product',$product->id)}}">
                      <button class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>


    </div>

</div>




@endsection
