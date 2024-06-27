@extends('layouts.main')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset($product->image) }}" class="img-fluid" alt="{{ $product->name }}">
            </div>
            <div class="col-md-6">
                <h2>{{ $product->name }}</h2>
                <p>Price: ${{ $product->price }}</p>
                <p>Sold: {{ $product->sold }}</p>
                <p>Created at: {{ $product->created_at }}</p>
                <p>Updated at: {{ $product->updated_at }}</p>
                <a href="{{ route('show.product-dasboard') }}" class="btn btn-primary">Back to cart</a>
            </div>
        </div>
        <h2 class= "mt-4 mb-4">Related product</h2>
        @foreach ($relatedProducts as $relatedProduct)
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset($relatedProduct->image) }}" class="card-img-top"
                            style="width: 300px;
                        height: auto; margin:0px auto"
                            alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title ">{{ $relatedProduct->name }}</h5>
                            <p class="card-text">Price: ${{ $relatedProduct->price }}</p>
                            <p class="card-text">Category: {{ $relatedProduct->sold }}</p>
                            <a href="{{ route('show.product-detail', $relatedProduct->id) }}"
                                class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
