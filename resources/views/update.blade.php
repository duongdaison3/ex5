<!DOCTYPE html>
<html>
<head>
  <title>Update Product</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <div class="container">
    <h1>Update Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="name">Product Name:</label>
        <input type="text" class="form-control" id="product_name" name="name" value="{{ $product->name }}" required>
      </div>
      <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" id="product_description" name="description" required>{{ $product->description }}</textarea>
      </div>
      <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" class="form-control" id="product_price" name="price" value="{{ $product->price }}" required>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
</body>
</html>