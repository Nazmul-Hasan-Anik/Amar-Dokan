@extends('layouts.front')

@section('title')
Welcome to Amar Dokan
@endsection

@section('content')

@include('layouts.include.slider')
<div class="py-5">
    <div class="container">
        <div class="row">
            <h2>Featured Products</h2>
            <div class="owl-carousel featured-carousel owl-theme">
   
    @foreach ($products as $product )
                
                <div class="item">
                <div class="card">
                    <img src="{{ asset('asset/upload/product/'.$product->image) }}" alt="Product Image">
                    <div class="card-body">
                        <h5>{{ $product->name }}</h5>
                        <span class="float-start">{{ $product->selling_price }}</span>
                        <span class="float-end"><s>{{ $product->original_price }}</s></span>
                    </div>
                </div>
            </div>
            @endforeach
    
</div>
            
        </div>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="row">
            <h2>Trending Category</h2>
            <div class="owl-carousel featured-carousel owl-theme">
   
    @foreach ($trending_cat as $tcat )
                
                <div class="item">
                    <a href="{{ url('view-category/'.$tcat ->slug) }}">
                <div class="card">
                    <img src="{{ asset('asset/upload/category/'.$tcat->image) }}" alt="Product Image">
                    <div class="card-body">
                        <h5>{{ $tcat->name }}</h5>
                          <p>
                            {{ $tcat->description }}
                        </p>
                    </div>
                </div>
                </a>
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
            items:5
        }
    }
})
</script>
    
@endsection