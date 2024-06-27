@extends('layouts.main')
@section('content')
    <div class="mt-4 container-fluid ms-4 ">
        <div class="row">
            <div class="my-4 border col-lg-4 col-lg-6 border-1 rounded-pill text paddingDashboard">
                <p>Total number of User </p>
                <h1>{{ $userCounts }}</h1>
            </div>
            <div class="my-4 border col-lg-4 col-lg-6 border-1 rounded-pill text paddingDashboard">
                <p>Total number of Products</p>
                <h1>{{ $productCounts }}</h1>
            </div>
            <div class="mb-4 border col-lg-4 col-lg-6 border-1 rounded-pill text paddingDashboard">
                <p>Total number of Categories</p>
                <h1>{{ $categoryCounts }}</h1>
            </div>
        </div>

    </div>
@endsection
