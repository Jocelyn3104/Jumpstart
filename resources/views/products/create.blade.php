<h1>Create Product</h1> 
<form method="POST" action="{{ route('products.store') }}"> 
    @csrf 
    <input type="text" name="name" placeholder="Name"> 
    <textarea name="description" placeholder="Description"></textarea> 
    <input type="number" step="0.01" name="price" placeholder="Price"> 
    <button type="submit">Save</button> 
</form>