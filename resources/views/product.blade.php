@extends('layouts.app')
@section('title', 'Product Details')
@section('content')
<div class="product-detail">
  <h1>{{ $product->product_name }}</h1>
  <img src="{{ $product->product_image }}" alt="{{ $product->product_name }}">
  <p>{{ $product->product_description }}</p>
  <p>Price: ${{ $product->product_price }}</p>
  <p>Stock: {{ $product->product_stock }}</p>
  <p>Category: {{ $product->product_category }}</p>
  <a href="{{ route('products') }}" class="btn btn-primary">Back</a>
</div>
@endsection