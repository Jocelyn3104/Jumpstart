<h1>Products</h1>

<a href="{{ route('products.create') }}">Create New Product</a>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price ($)</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ number_format($product->price, 2) }}</td>
            <td>
                <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4">No products found.</td>
        </tr>
        @endforelse
    </tbody>
</table>
