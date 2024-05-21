<!DOCTYPE html>
<html>
<head>
    <title>Add New Product</title>
</head>
<body>
    <h1>Add New Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div>
            <label>Product Type:</label>
            <input type="text" name="ProductType" value="{{ old('ProductType') }}">
            @error('ProductType') <div>{{ $message }}</div> @enderror
        </div>
        <div>
            <label>Product Code:</label>
            <input type="text" name="ProductCode" value="{{ old('ProductCode') }}">
            @error('ProductCode') <div>{{ $message }}</div> @enderror
        </div>
        <div>
            <label>Product Name:</label>
            <input type="text" name="ProductName" value="{{ old('ProductName') }}">
            @error('ProductName') <div>{{ $message }}</div> @enderror
        </div>
        <div>
            <label>Quantity:</label>
            <input type="text" name="Quantity" value="{{ old('Quantity') }}">
            @error('Quantity') <div>{{ $message }}</div> @enderror
        </div>
        <div>
            <label>Note:</label>
            <input type="text" name="Note" value="{{ old('Note') }}">
            @error('Note') <div>{{ $message }}</div> @enderror
        </div>
        <button type="submit">Add Product</button>
    </form>
</body>
</html>