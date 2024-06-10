@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body text-center">
            
            <h2 class="card-title">{{$user->name}}</h2>
            <h5 class="card-subtitle mb-2 text-muted">{{$user->type}}</h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <strong>Email:</strong> {{$user->email}}
            </li>
        </ul>
    </div>
</div>

@endsection
