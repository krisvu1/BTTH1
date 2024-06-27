@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="mb-4 col-lg-12">
                <h1>Category User</h1>
            </div>
        </div>
        <form action="{{ route('category.update', ['id' => $category->id]) }}" method="post">
            @csrf
            <div class="mb-3 row">
                <div class="col-lg-6">
                    <label for="name" class="form-label">Name</label>
                    <input name="name" type="text" id="name" class="form-control" placeholder="Enter name"
                        value="{{ $category->name }}">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-lg-6">
                    <label for="created_by" class="form-label">Type</label>
                    <input name="created_by" type="text" id="created_by" class="form-control" placeholder="Enter email"
                        value="{{ $category->created_by }}">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <button type="submit" class="btn btn-primary update-button">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
