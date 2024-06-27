@extends('layouts.main')
@section('content')
    <div class="container mt-4">
        <form id="" action="{{ route('product.search') }}">
            <div class="mb-3 row">

                <div class="col-lg-2">
                    <label for="category" class="form-label">Sort by price</label>
                    <br>
                    <select class="form-select custom-select" name="sort-by-price" id="sortByPrice">
                        <option value="" {{ empty($sortByPrice) ? 'selected' : '' }}>Choose type</option>
                        <option value="asc" {{ !empty($sortByPrice) && $sortByPrice == 'asc' ? 'selected' : '' }}>
                            Ascending</option>
                        <option value="desc" {{ !empty($sortByPrice) && $sortByPrice == 'desc' ? 'selected' : '' }}>
                            Descending
                        </option>
                    </select>
                </div>
                <div class="col-lg-2">
                    <label for="category" class="form-label">Sort by sold number</label>
                    <br>
                    <select class="form-select custom-select" name="sort-by-sold-number" id="sortBySoldNumber">
                        <option value="" {{ empty($sortBySoldNumber) ? 'selected' : '' }}>Choose type</option>
                        <option value="asc"
                            {{ !empty($sortBySoldNumber) && $sortBySoldNumber == 'asc' ? 'selected' : '' }}>
                            Ascending</option>
                        <option value="desc"
                            {{ !empty($sortBySoldNumber) && $sortBySoldNumber == 'desc' ? 'selected' : '' }}>Descending
                        </option>
                    </select>
                </div>
                <div class="mb-2 col-lg-2 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">Search</button>
                </div>
            </div>
        </form>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card vh-79">
                        <img src="{{ asset($product->image) }}" class="card-img-top " style="height:300px"
                            alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title ">{{ $product->name }}</h5>
                            <p class="card-text">Price: ${{ $product->price }}</p>
                            <p class="card-text">Category: {{ $product->sold }}</p>

                            <div style="display:inline-block;margin-right:7px"><a
                                    href="{{ route('show.product-detail', $product->id) }}"
                                    class="btn btn-primary">View</a></div>
                            <a href="{{ route('cart.create', $product->id) }}" class="btn btn-primary">Add to
                                cart</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
