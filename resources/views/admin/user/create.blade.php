@extends('layout.layout')

@section('content')
<div class="flex items-center justify-center bg-gray-100">
    <form action="{{ route('user.store') }}" method="POST" class="w-full p-6 bg-white rounded shadow-md flex flex-col justify-between" enctype="multipart/form-data">
        @csrf

          <div>
            <label for="name" class="block text-gray-700 font-semibold mb-1">Name</label>
            <input type="name" name="name" id="name" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
            @error('name')
                <p class="text-red-700 font-semibold text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email" class="block text-gray-700 font-semibold mb-1">Email</label>
            <input type="email" name="email" id="email"class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
             @error('email')
                <p class="text-red-700 font-semibold text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password" class="block text-gray-700 font-semibold mb-1">Password</label>
            <input type="password" name="password" id="password" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
             @error('password')
             <p class="text-red-700 font-semibold text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

         <div>
            <label for="image" class="block text-gray-700 font-semibold mb-1">Image</label>
            <input type="file" name="image" id="image" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
             @error('image')
             <p class="text-red-700 font-semibold text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

          <button type="submit" class="btn b-solid btn-primary-solid px-5 cursor-pointer">Submit</button>

    </form>
</div>
@endsection
