@extends('layout.app')

@section('content')
    <h1 class="text-2xl mb-4">Edit Product</h1>

    @if ($errors->any())
        <div class="mb-4 text-red-600">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block">Name</label>
            <input type="text" name="name" value="{{ old('name', $product->name) }}" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label class="block">Description</label>
            <textarea name="description" class="w-full border rounded p-2">{{ old('description', $product->description) }}</textarea>
        </div>

        <div>
            <label class="block">Price</label>
            <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}" class="w-full border rounded p-2" required>
        </div>

        <button type="submit" class="bg-green-600 text-black px-4 py-2 rounded">Update</button>
        <a href="{{ route('products.index') }}" class="text-gray-600 ml-2">Cancel</a>
    </form>
@endsection