@extends('layout.layout')

@section('content')
<form class="p-6" action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
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
            <label for="description" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">Description</label>
            <div class="flex">
        <input type="text" id="description" name="description" class="form-input rounded-l-none" placeholder="Enter Your Description">
        </div>
          @error('description')
                <p class="text-red-700 font-semibold text-sm mt-1">{{ $message }}</p>
         @enderror

        <div class="mb-4">
            <label for="img" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">Image</label>
            <div class="flex">
        <input type="file" id="image" name="image" class="form-input rounded-l-none" placeholder="Enter Your Description">
        </div>
            @error('imgae')
                <p class="text-red-700 font-semibold text-sm mt-1">{{ $message }}</p>
         @enderror

          <div class="mb-4">
            <label for="description" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">ImageAlt</label>
            <div class="flex">
        <input type="text" id="imagealt" name="imagealt" class="form-input rounded-l-none" placeholder="Enter Your ImageAlt">
        </div>
            @error('imagealt')
                <p class="text-red-700 font-semibold text-sm mt-1">{{ $message }}</p>
         @enderror


          <div class="mb-4">
            <label for="description" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">Category</label>
            <div class="flex">
        <input type="text" id="category" name="category" class="form-input rounded-l-none" placeholder="Enter Your Category">
        </div>
            @error('category')
                <p class="text-red-700 font-semibold text-sm mt-1">{{ $message }}</p>
         @enderror

          <div class="mb-4">
            <label for="description" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">Author</label>
            <div class="flex">
        <input type="text" id="author" name="author" class="form-input rounded-l-none" placeholder="Enter Your Author">
        </div>
            @error('author')
                <p class="text-red-700 font-semibold text-sm mt-1">{{ $message }}</p>
         @enderror

          <div class="mb-4">
            <label for="metakey" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">Author</label>
            <div class="flex">
        <input type="text" id="metakey" name="metakey" class="form-input rounded-l-none" placeholder="Enter Your MetaKey">
        </div>
            @error('metakey')
                <p class="text-red-700 font-semibold text-sm mt-1">{{ $message }}</p>
         @enderror

          <div class="mb-4">
            <label for="metatital" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">MetaTital</label>
            <div class="flex">
        <input type="text" id="metatital" name="metatital" class="form-input rounded-l-none" placeholder="Enter Your MetaTital">
        </div>
            @error('metatital')
                <p class="text-red-700 font-semibold text-sm mt-1">{{ $message }}</p>
         @enderror

          <div class="mb-4">
            <label for="metadescription" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">MetaDescription</label>
            <div class="flex">
        <input type="text" id="metadescription" name="metadescription" class="form-input rounded-l-none" placeholder="Enter Your MetaDescription">
        </div>
          @error('metadescription')
                <p class="text-red-700 font-semibold text-sm mt-1">{{ $message }}</p>
         @enderror

    </div>

    <button type="submit" class="btn b-solid btn-primary-solid px-5 cursor-pointer">Submit</button>
 </form>
@endsection
