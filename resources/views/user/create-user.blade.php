@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="mb-4 col-lg-12">
            <h1>Create New User</h1>
        </div>
        <form id="createUserForm" action="{{ route('user.create') }}" method="POST">
            @csrf
            <div class="mb-3 form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input name="name" type="text" class="form-control" id="name" placeholder="Enter name"
                        value="">
                </div>
            </div>
            <div class="mb-3 form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input name="email" type="email" class="form-control" id="email" placeholder="Enter email"
                        value="">
                </div>
            </div>
            <div class="mb-3 form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input name="password" type="password" class="form-control" id="password" placeholder="Enter password"
                        value="">
                </div>
            </div>
            <div class="mb-3 form-group row">
                <label for="category" class="col-sm-2 col-form-label">Type</label>
                <div class="col-sm-10">
                    <select name="type" class="form-control" id="category">
                        <option value="">Choose type</option>
                        <option value="user">User
                        </option>
                        <option value="admin">Admin</option>
                    </select>
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
