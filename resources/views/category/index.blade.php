@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="col-lg-12">
            <h1>Category List</h1>
        </div>
        <form id="searchForm" action="">
            <div class="mb-3 row">
                <div class="col-lg-4">
                    <label for="name_email" class="form-label">Category Name</label>
                    <input class="form-control" name="name_email" type="text" id="name_email"
                        placeholder="Search name or email" value="">
                </div>
                <div class="mb-2 col-lg-2 d-flex align-items-end">
                    <button type="submit" style="margin-bottom:-8px" class=" btn btn-primary w-100">Search</button>
                </div>
            </div>
        </form>
        <div class="mt-4 row">
            <div class="col-lg-2">
                <a href="{{ route('category.create') }}"><button class="btn btn-success w-100">Create new
                        category</button></a>
            </div>
        </div>
        <div class="row" style="margin-top:20px">
            <div class="col-lg-12">
                <table class="table table-bordered" id="resultTable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Create_By</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{ $category->id }}</th>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->created_by }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td>{{ $category->updated_at }}</td>
                                <td>
                                    <a href="{{ route('category.show', ['id' => $category->id]) }}"
                                        class="btn btn-info">Xem</a>
                                    <a href="{{ route('category.edit', ['id' => $category->id]) }}"
                                        class="btn btn-primary">Sửa</a>
                                    <form action="{{ route('category.delete', ['id' => $category->id]) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        <div class="col-lg-12">
            {{ $categories->links() }}
        </div>
    </div>
@endsection
