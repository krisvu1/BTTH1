@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="mb-4 col-lg-12">
                <h1>Update User</h1>
            </div>
        </div>
        <form action="{{ route('update.user', ['id' => $user->id]) }}" method="post">
            @csrf
            <div class="mb-3 row">
                <div class="col-lg-6">
                    <label for="name" class="form-label">Name</label>
                    <input name="name" type="text" id="name"
                        class="form-control @error('name') is-invalid @enderror" placeholder="Enter name"
                        value="{{ $user->name }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-lg-6">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" id="email"
                        class="form-control @error('email') is-invalid @enderror" placeholder="Enter email"
                        value="{{ $user->email }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-lg-6">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" id="password" class="form-control" placeholder="Enter password"
                        value="">
                </div>
            </div>
            <div class="mb-4 row">
                <div class="col-lg-6">
                    <label for="type" class="form-label">Type</label>
                    <select name="type" id="category"
                        class="form-select custom-select @error('type') is-invalid @enderror">
                        <option value="user" {{ !empty($user->type) && $user->type == 'user' ? 'selected' : '' }}>
                            User</option>
                        <option value="admin" {{ !empty($user->type) && $user->type == 'admin' ? 'selected' : '' }}>Admin
                        </option>
                    </select>
                    @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
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
