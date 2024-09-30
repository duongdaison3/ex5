@extends('layouts.app')

@section('title', 'Products')

@section('content')
<h1>Products</h1>
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Price</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
      <td>{{ $product->id }}</td>
      <td>{{ $product->product_name }}</td>
      <td>${{ number_format($product->product_price, 2) }}</td>
      <td>
        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View</a>
        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{-- <a href="{{ route('products.create') }}" class="btn btn-success">Add New Product</a> --}}

@endsection