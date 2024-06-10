@extends('layouts.main')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>User List</title>
    
      
</head>
<body>
    <div class="container">
        <div class="col-lg-12">
            <h1>User List</h1>
        </div>
        <form id="searchForm" action="{{route('user.index')}}">
            <div class="row mb-3">
                <div class="col-lg-4">
                    <label for="name_email" class="form-label">Name/Email</label>
                    <input class="form-control" name="name_email" type="text" id="name_email" placeholder="Search name or email" value="{{ $name_email }}">
                </div>
                <div class="col-lg-4">
                    <label for="category" class="form-label">Type</label>
                    <br>
                    <select class="form-select custom-select" name="category" id="category">
                        <option value="" {{ empty($category) ?  'selected' : '' }}>Choose type</option>
                        <option value="frontend" {{ !empty($category) && $category == 'frontend' ? 'selected' : ''}}>Frontend user</option>
                        <option value="cms" {{ !empty($category) && $category == 'cms' ? 'selected' : ''}}>CMS user</option>
                    </select>
                </div>
                <div class="col-lg-2 d-flex align-items-end mb-2">
                    <button type="submit" class="btn btn-primary w-100">Search</button>
                </div>
            </div>
        </form>
        <div class="row mt-4">
            <div class="col-lg-2">
                <button class="btn btn-success w-100">Create new user</button>
            </div>
        </div>
        
        <div class="row" style="margin-top:20px">
            <div class="col-lg-12">
                <table class="table table-bordered" id="resultTable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">User Name</th>
                            <th scope="col">User Email</th>
                            <th scope="col">Type</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->type }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>{{ $user->updated_at }}</td>
                                <td>
                                    <a href="{{ route('show.user', ['id' => $user->id]) }}" class="btn btn-info">Xem</a>
                                  
                                    <a href="{{ route('update.layout', ['id' => $user->id]) }}" class="btn btn-primary">Sửa</a>
                                    
                                 
                                        <form action="{{ route('user.delete', $user->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class = "btn btn-danger"type="submit">Delete</button>
                                        </form>
                                   

                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $users->links('vendor.pagination.default') }}
        </div>
    </div>
</body>
</html>
@endsection
