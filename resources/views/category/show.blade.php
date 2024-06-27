@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="text-center card-body">

                <h2 class="card-title">{{ $category->name }}</h2>
                <h5 class="mb-2 card-subtitle text-muted">{{ $category->created_by }}</h5>
            </div>
        </div>
    </div>
@endsection
