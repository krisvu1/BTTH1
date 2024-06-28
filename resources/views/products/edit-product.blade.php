@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="mb-4 col-lg-12">
            <h1>Update Product</h1>
        </div>
        <form action="{{ route('product.update', ['id' => $product->id]) }}" method="post">
            @csrf

            <div class="mb-3 form-group row">
                <label for="name" class="col-sm-2 col-form-label">Product Name</label>
                <div class="col-sm-10">
                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                        id="name" placeholder="Enter name" value="{{ old('name', $product->name) }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 form-group row">
                <label for="image" class="col-sm-2 col-form-label">Product Image</label>
                <div class="col-sm-10">
                    <input name="image" type="text" class="form-control @error('image') is-invalid @enderror"
                        id="image" placeholder="Enter image URL" value="{{ old('image', $product->image) }}">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="mb-3 form-group row">
                <label for="price" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                    <input name="price" type="number" class="form-control @error('price') is-invalid @enderror"
                        id="price" placeholder="Enter price" value="{{ old('price', $product->price) }}">
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 form-group row">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input name="description" type="text" class="form-control @error('description') is-invalid @enderror"
                        id="description" placeholder="Enter description"
                        value="{{ old('description', $product->description) }}">
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 form-group row">
                <label for="sold" class="col-sm-2 col-form-label">Sold</label>
                <div class="col-sm-10">
                    <input name="sold" type="number" class="form-control @error('sold') is-invalid @enderror"
                        id="sold" placeholder="Enter sold quantity" value="{{ old('sold', $product->sold) }}">
                    @error('sold')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 form-group row">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <select name="status" class="form-control @error('status') is-invalid @enderror" id="status">
                        <option value="">Choose status</option>
                        <option value="inactive" {{ old('status', $product->status) == 'inactive' ? 'selected' : '' }}>
                            Inactive</option>
                        <option value="active" {{ old('status', $product->status) == 'active' ? 'selected' : '' }}>Active
                        </option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary update-button">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
