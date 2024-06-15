@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <h1>Update User</h1>
            </div>
        </div>
        <form action="{{ route('update.user', ['id' => $user->id]) }}" method="post">
            @csrf
            <div class="row mb-3">
                <div class="col-lg-6">
                    <label for="name" class="form-label">Name</label>
                    <input name="name" type="text" id="name" class="form-control" placeholder="Enter name"
                        value="{{ $user->name }}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-6">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" id="email" class="form-control" placeholder="Enter email"
                        value="{{ $user->email }}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-6">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" id="password" class="form-control" placeholder="Enter password"
                        value="{{ $user->password }}">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-6">
                    <label for="type" class="form-label">Type</label>
                    <select name="type" id="category" class="form-select custom-select">
                        <option value="" {{ empty($category) ? 'selected' : '' }}>Choose type</option>
                        <option value="Font-end user"
                            {{ !empty($category) && $category == 'Font-end user' ? 'selected' : '' }}>Frontend user</option>
                        <option value="CMS user" {{ !empty($category) && $category == 'CMS user' ? 'selected' : '' }}>CMS
                            user</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
