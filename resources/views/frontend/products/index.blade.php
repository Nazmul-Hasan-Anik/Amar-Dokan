@extends('layouts.front')

@section('title')
 {{ $categories->name }}
@endsection

@section('content')
<div class="py-5">
    <div class="container">
        <div class="row">
            <h2>{{ $categories->name }}</h2>
            <div class="owl-carousel featured-carousel owl-theme">
            
   
    @foreach ($products as $product )
                
                <div class="col-md-3 mb-3">
                <div class="card">
                    <a  href="{{ url('view-category/'.$categories->slug.'/'.$product->slug) }}">
                    <img src="{{ asset('asset/upload/product/'.$product->image) }}" alt="Product Image">
                    <div class="card-body">
                        <h5>{{ $product->name }}</h5>
                        <span class="float-start">{{ $product->selling_price }}</span>
                        <span class="float-end"><s>{{ $product->original_price }}</s></span>
                    </div>
                    </a>
                </div>
            </div>
            @endforeach
    
</div>
            
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $('.featured-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
            
        }
    }
})
</script>
@endsection