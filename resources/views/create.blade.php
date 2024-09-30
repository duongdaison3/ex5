@extends('layouts.app')
@section('title', 'Create Product')

@section('content')
  <h2>Create Product</h2>
  <form action="{{ route('products.create') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Product Name:</label>
      <input type="text" class="form-control" id="product_name" name="name" required>
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <textarea class="form-control" id="product_description" name="description" rows="3" required></textarea>
    </div>
    <div class="form-group">
      <label for="price">Price:</label>
      <input type="number" class="form-control" id="product_price" name="price" required>
    </div>
    <div class="form-group">
      <lable for="stock">Stock</lable>
      <input type="number" class="form-control" id="product_stock" name="stock" required>
    </div>
    <div class="form-group">
      <lable for="category">Category</lable>
      <input type="text" class="form-control" id="product_category" name="category" required>
    </div>
    <div class="form-group">
      <lable for="image">Image</lable>
      <input type="file" class="form-control" id="product_image" name="image" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection