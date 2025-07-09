@extends('layout.app')

@section('content')
    <h1 class="text-2xl mb-4">Edit Merek</h1>

    @if ($errors->any())
        <div class="mb-4 text-red-600">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('mereks.update', $merek) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block">Name</label>
            <input type="text" name="name" value="{{ old('name', $merek->name) }}" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label class="block">Description</label>
            <textarea name="description" class="w-full border rounded p-2">{{ old('description', $merek->description) }}</textarea>
        </div>

        <button type="submit" class="bg-green-600 text-black px-4 py-2 rounded">Update</button>
        <a href="{{ route('mereks.index') }}" class="text-gray-600 ml-2">Cancel</a>
    </form>
@endsection