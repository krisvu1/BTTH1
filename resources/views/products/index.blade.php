@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="col-lg-12">
            <h1>Product List</h1>
        </div>
        <form id="searchForm" action="{{ route('product.index') }}">
            <div class="mb-3 row">
                <div class="col-lg-2">
                    <label for="name_email" class="form-label">Product Name</label>
                    <input class="form-control" name="name_email" type="text" id="name_email"
                        placeholder="Search name or email" value="">
                </div>


                <div class="col-lg-2">
                    <label for="category" class="form-label">Sort by price</label>
                    <br>
                    <select class="form-select custom-select" name="sort-by-price" id="sortByPrice">
                        <option value="" {{ empty($sortByPrice) ? 'selected' : '' }}>Choose type</option>
                        <option value="asc" {{ !empty($sortByPrice) && $sortByPrice == 'asc' ? 'selected' : '' }}>
                            Ascending</option>
                        <option value="desc" {{ !empty($sortByPrice) && $sortByPrice == 'desc' ? 'selected' : '' }}>
                            Descending
                        </option>
                    </select>
                </div>
                <div class="col-lg-2">
                    <label for="category" class="form-label">Sort by sold number</label>
                    <br>
                    <select class="form-select custom-select" name="sort-by-sold-number" id="sortBySoldNumber">
                        <option value="" {{ empty($sortBySoldNumber) ? 'selected' : '' }}>Choose type</option>
                        <option value="asc"
                            {{ !empty($sortBySoldNumber) && $sortBySoldNumber == 'asc' ? 'selected' : '' }}>
                            Ascending</option>
                        <option value="desc"
                            {{ !empty($sortBySoldNumber) && $sortBySoldNumber == 'desc' ? 'selected' : '' }}>Descending
                        </option>
                    </select>
                </div>
                <div class="mb-2 col-lg-2 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">Search</button>
                </div>
            </div>
        </form>
        <div class="mt-4 row">
            <div class="col-lg-2">
                <a href="{{ route('product.create') }}"><button class="btn btn-success w-100">Create new
                        user</button></a>
            </div>
        </div>

        <div class="row" style="margin-top:20px">
            <div class="col-lg-12">
                <table class="table table-bordered" id="resultTable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Sold</th>
                            <th scope="col">Status</th>
                            <th scope="col">Updated at</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <th scope="row">{{ $product->id }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->sold }}</td>
                                <td>{{ $product->status }}</td>
                                <td>{{ $product->updated_at }}</td>
                                <td>
                                    <a href="{{ route('product.show', ['id' => $product->id]) }}"
                                        class="btn btn-info">Xem</a>
                                    <a href="{{ route('product.edit', ['id' => $product->id]) }}"
                                        class="btn btn-primary">Sửa</a>
                                    <form action="{{ route('product.delete', $product->id) }}" method="POST"
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
            <div class="col-lg-12">
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection
