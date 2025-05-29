@extends('layout.layout')

@section('content')
<form class="p-6" action="{{route('industries.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-4">
    <label for="title" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">Title</label>
            <div class="flex">
         <input type="text" id="title" name="title" class="form-input rounded-l-none" placeholder="Enter Your Title">
            </div>
             @error('title')
                <p class="text-red-700 font-semibold text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="img" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">Image</label>
            <div class="flex">
        <input type="file" id="image" name="image" class="form-input rounded-l-none" placeholder="Enter Your image">
        </div>
            @error('image')
                <p class="text-red-700 font-semibold text-sm mt-1">{{ $message }}</p>
         @enderror

    <button type="submit" class="btn b-solid btn-primary-solid px-5 cursor-pointer">Submit</button>
 </form>
@endsection
