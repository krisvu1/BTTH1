@extends('layouts.main')
@section('content')
    <div class="container-fluid mt-4 ms-4  ">

        <div class="row">
            <div class="col-lg-6 border border-1 rounded-pill text paddingDashboard ">
                <p>Total number of orders in Jauary</p>
                <h1>100</h1>
            </div>
            <div class="col-lg-6 col-lg-6 border border-1 rounded-pill text paddingDashboard">
                <p>Total amout in Jauary</p>
                <h1>200</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-6 border border-1 rounded-pill text paddingDashboard my-4">
                <p>Total number of User in February</p>
                <h1>{{ $userCounts }}</h1>
            </div>
            <div class="col-lg-4 col-lg-6 border border-1 rounded-pill text paddingDashboard my-4">
                <p>Total number of products</p>
                <h1>200</h1>
            </div>
            <div class="col-lg-4 col-lg-6 border border-1 rounded-pill text paddingDashboard mb-4">
                <p>Total number of categories</p>
                <h1>100</h1>
            </div>
        </div>

    </div>
@endsection
