@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="mb-4 col-lg-12">
            <h1>Create New Category</h1>
        </div>
        <form id="" action="{{ route('category.store') }}" method="POST">
            @csrf

            <div class="mb-3 form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input name="name" type="text" class="form-control" id="name" placeholder="Enter name"
                        value="">
                </div>
            </div>
            <div class="mb-3 form-group row">
                <label for="name" class="col-sm-2 col-form-label">Created_by</label>
                <div class="col-sm-10">
                    <input name="created_by" type="text" class="form-control" id="create_by" placeholder=""
                        value="">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>

        </form>
    </div>
@endsection
