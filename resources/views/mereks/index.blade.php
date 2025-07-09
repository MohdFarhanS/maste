@extends('layout.app')

@section('content')
    <h1 class="text-2xl mb-4">Merek List</h1>
    <a href="{{ route('mereks.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Merek</a>

    @if (session('success'))
        <div class="mt-2 text-green-600">{{ session('success') }}</div>
    @endif

    <table class="w-full mt-4 border-collapse border border-gray-300">
        <thead>
            <tr>
                <th class="border p-2">Name</th>
                <th class="border p-2">Description</th>
                <th class="border p-2">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($mereks as $merek)
            <tr>
                <td class="border p-2">{{ $merek->name }}</td>
                <td class="border p-2">{{ $merek->description }}</td>
                <td class="border p-2">
                    <a href="{{ route('mereks.edit', $merek) }}" class="text-blue-600">Edit</a>
                    <form action="{{ route('mereks.destroy', $merek) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" onclick="return confirm('Delete this product?')" class="text-red-600 ml-2">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection