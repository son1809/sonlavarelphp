<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Product Type:</label>
            <input type="text" name="ProductType" value="{{ old('ProductType', $product->ProductType) }}">
            @error('ProductType') <div>{{ $message }}</div> @enderror
        </div>
        <div>
            <label>Product Code:</label>
            <input type="text" name="ProductCode" value="{{ old('ProductCode', $product->ProductCode) }}">
            @error('ProductCode') <div>{{ $message }}</div> @enderror
        </div>
        <div>
            <label>Product Name:</label>
            <input type="text" name="ProductName" value="{{ old('ProductName', $product->ProductName) }}">
            @error('ProductName') <div>{{ $message }}</div> @enderror
        </div>
        <div>
            <label>Quantity:</label>
            <input type="text" name="Quantity" value="{{ old('Quantity', $product->Quantity) }}">
            @error('Quantity') <div>{{ $message }}</div> @enderror
        </div>
        <div>
            <label>Note:</label>
            <input type="text" name="Note" value="{{ old('Note', $product->Note) }}">
            @error('Note') <div>{{ $message }}</div> @enderror
        </div>
        <button type="submit">Update Product</button>
    </form>
</body>
</html>