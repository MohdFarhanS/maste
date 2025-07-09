@extends('layout.app')

@section('content')
    <h1 class="text-2xl mb-4">Add Merek</h1>

    @if ($errors->any())
        <div class="mb-4 text-red-600">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('mereks.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block">Name</label>
            <input type="text" name="name" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label class="block">Description</label>
            <textarea name="description" class="w-full border rounded p-2"></textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
        <a href="{{ route('mereks.index') }}" class="text-gray-600 ml-2">Back</a>
    </form>
@endsection