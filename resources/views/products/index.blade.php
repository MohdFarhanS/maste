@extends('layout.app')

@section('content')
    <h1 class="text-2xl mb-4">Product List</h1>
    <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Product</a>

    @if (session('success'))
        <div class="mt-2 text-green-600">{{ session('success') }}</div>
    @endif

    <table class="w-full mt-4 border-collapse border border-gray-300">
        <thead>
            <tr>
                <th class="border p-2">Name</th>
                <th class="border p-2">Dsc</th>
                <th class="border p-2">Price</th>
                <th class="border p-2">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
                <td class="border p-2">{{ $product->name }}</td>
                <td class="border p-2">{{ $product->description }}</td>
                <td class="border p-2">{{ $product->price }}</td>
                <td class="border p-2">
                    <a href="{{ route('products.edit', $product) }}" class="text-blue-600">Edit</a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" onclick="return confirm('Delete this product?')" class="text-red-600 ml-2">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection