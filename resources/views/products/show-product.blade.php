@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-body text-center">

                <h2 class="card-title">{{ $product->name }}</h2>
                <h5 class="card-subtitle mb-2 text-muted">{{ $product->description }}</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <strong>Price:</strong> {{ $product->price }}
                </li>
            </ul>
        </div>
    </div>
@endsection
