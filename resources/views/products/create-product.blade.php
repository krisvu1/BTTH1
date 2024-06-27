@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="col-lg-12 mb-4">
            <h1>Create New Product</h1>
        </div>
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="form-group row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Product Name</label>
                <div class="col-sm-10">
                    <input name="name" type="text" class="form-control" id="name" placeholder="Enter name"
                        value="{{ old('name') }}">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="image" class="col-sm-2 col-form-label">Product Image</label>
                <div class="col-sm-10">
                    <input name="image" type="text" class="form-control" id="image" placeholder="Enter image URL"
                        value="{{ old('image') }}">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="category" class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-10">
                    <select name="category_id" class="form-control" id="category">
                        <option value="" {{ old('category_id') == '' ? 'selected' : '' }}>Choose category</option>
                        <option value="1" {{ old('category_id') == '1' ? 'selected' : '' }}>Category 1</option>
                        <option value="2" {{ old('category_id') == '2' ? 'selected' : '' }}>Category 2</option>
                        <option value="3" {{ old('category_id') == '3' ? 'selected' : '' }}>Category 3</option>
                        <option value="4" {{ old('category_id') == '4' ? 'selected' : '' }}>Category 4</option>
                    </select>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="price" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                    <input name="price" type="number" class="form-control" id="price" placeholder="Enter price"
                        value="{{ old('price') }}">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input name="description" type="text" class="form-control" id="description"
                        placeholder="Enter description" value="{{ old('description') }}">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="sold" class="col-sm-2 col-form-label">Sold</label>
                <div class="col-sm-10">
                    <input name="sold" type="number" class="form-control" id="sold"
                        placeholder="Enter sold quantity" value="{{ old('sold') }}">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <select name="status" class="form-control" id="status">
                        <option value="" {{ old('status') == '' ? 'selected' : '' }}>Choose status</option>
                        <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
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
