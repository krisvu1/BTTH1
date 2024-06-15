@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="col-lg-12">
            <h1>Create new user</h1>
        </div>
        <form id="createUserForm" action="{{ route('user.create') }}" method="POST">
            @csrf

            <div class="col-lg-2">
                <label for="name">Name</label>
                <div class="row">
                    <div class="col-lg-3">
                        <input name="name" type="text" id="name" placeholder="Enter name"
                            value="{{ old('name') }}">
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <label for="email">Email</label>
                <div class="row">
                    <div class="col-lg-3">
                        <input name="email" type="email" id="email" placeholder="Enter email"
                            value="{{ old('email') }}">
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <label for="email">Password</label>
                <div class="row">
                    <div class="col-lg-3">
                        <input name="password" type="password" id="password" placeholder="Enter email"
                            value="{{ old('password') }}">
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <label for="category">Type</label>
                <div class="row">
                    <div class="col-lg-3">
                        <select name="type" id="category">
                            <option value="" {{ old('type') == '' ? 'selected' : '' }}>Choose type</option>
                            <option value="Font-end user" {{ old('type') == 'Font-end user' ? 'selected' : '' }}>Font-end
                                user</option>
                            <option value="CMS user" {{ old('type') == 'CMS user' ? 'selected' : '' }}>CMS user</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-1">
                <div class="row">
                    <div class="col-lg-6" style="margin-top:20px">
                        <button type="submit">Create</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
@endsection
