@extends("layouts.main")

@section("content")
    <div class="container">
        <div class="col-lg-12">
            <h1>Create new user</h1>
        </div>
        <form id="createUserForm" action="{{route('user.create')}}" method="POST">
            @csrf
            <div class="col-lg-2">
                <label for="name">Name</label>
                <div class="row">
                    <div class="col-lg-3">
                        <input name="name" type="text" id="name" placeholder="Enter name" value="">
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <label for="email">Email</label>
                <div class="row">
                    <div class="col-lg-3">
                        <input name="email" type="text" id="email" placeholder="Enter email" value="">
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <label for="email">Password</label>
                <div class="row">
                    <div class="col-lg-3">
                        <input name="password" type="text" id="password" placeholder="Enter email" value="">
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <label for="category">Type</label>
                <div class="row">
                    <div class="col-lg-3">
                        <select name="category" id="category">
                            <option value="" {{ empty($category) ?  'selected' : '' }}>Choose type</option>
                            <option value="Font-end user" {{ !empty($category) && $category == 'Font-end user' ? 'selected' : ''}}>Font-end user</option>
                            <option value="CMS user" {{ !empty($category) && $category == 'CMS user' ? 'selected' : ''}}>CMS user</option>
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