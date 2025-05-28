<h1>Edit Product</h1>

<form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf
    @method('PUT')
    
    <input type="text" name="name" value="{{ old('name', $product->name) }}" placeholder="Name">
    <textarea name="description" placeholder="Description">{{ old('description', $product->description) }}</textarea>
    <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}" placeholder="Price">
    
    <button type="submit">Update</button>
</form>
