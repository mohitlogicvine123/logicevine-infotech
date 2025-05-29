@extends('layout.layout')

@section('content')
<form class="p-6" action="{{route('blog.update',$edit->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-4">
    <label for="title" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">Title</label>
            <div class="flex">
         <input type="text" id="title" name="title" class="form-input rounded-l-none" placeholder="Enter Your Title" value="{{$edit->title}}">
            </div>
             @error('title')
                <p class="text-red-700 font-semibold text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">Description</label>
            <div class="flex">
        <input type="text" id="description" name="description" class="form-input rounded-l-none" placeholder="Enter Your Description" value="{{$edit->description}}">
        </div>
          @error('description')
                <p class="text-red-700 font-semibold text-sm mt-1">{{ $message }}</p>
         @enderror

        <div class="mb-4">
            <label for="img" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">Image</label>
            <div class="flex">
        <input type="file" id="image" name="image" class="form-input rounded-l-none" placeholder="Enter Your Description">
        </div>
         <img src="{{ asset('storage/' . $edit->image) }}"width="100px" alt="">
            @error('imgae')
                <p class="text-red-700 font-semibold text-sm mt-1">{{ $message }}</p>
         @enderror

          <div class="mb-4">
            <label for="description" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">ImageAlt</label>
            <div class="flex">
        <input type="text" id="imagealt" name="imagealt" class="form-input rounded-l-none" placeholder="Enter Your ImageAlt" value="{{$edit->imagealt}}">
        </div>
            @error('imagealt')
                <p class="text-red-700 font-semibold text-sm mt-1">{{ $message }}</p>
         @enderror


          <div class="mb-4">
            <label for="description" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">Category</label>
            <div class="flex">
        <input type="text" id="category" name="category" class="form-input rounded-l-none" placeholder="Enter Your Category" value="{{$edit->category}}">
        </div>
            @error('category')
                <p class="text-red-700 font-semibold text-sm mt-1">{{ $message }}</p>
         @enderror

          <div class="mb-4">
            <label for="description" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">Author</label>
            <div class="flex">
        <input type="text" id="author" name="author" class="form-input rounded-l-none" placeholder="Enter Your Author" value="{{$edit->author}}">
        </div>
            @error('author')
                <p class="text-red-700 font-semibold text-sm mt-1">{{ $message }}</p>
         @enderror

          <div class="mb-4">
            <label for="metakey" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">Meta-Key</label>
            <div class="flex">
        <input type="text" id="metakey" name="metakey" class="form-input rounded-l-none" placeholder="Enter Your MetaKey" value="{{$edit->metakey}}">
        </div>
            @error('metakey')
                <p class="text-red-700 font-semibold text-sm mt-1">{{ $message }}</p>
         @enderror

          <div class="mb-4">
            <label for="metatital" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">MetaTital</label>
            <div class="flex">
        <input type="text" id="metatital" name="metatital" class="form-input rounded-l-none" placeholder="Enter Your MetaTital" value="{{$edit->metatitle}}">
        </div>
            @error('metatital')
                <p class="text-red-700 font-semibold text-sm mt-1">{{ $message }}</p>
         @enderror

          <div class="mb-4">
            <label for="metadescription" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">MetaDescription</label>
            <div class="flex">
        <input type="text" id="metadescription" name="metadescription" class="form-input rounded-l-none" placeholder="Enter Your MetaDescription" value="{{$edit->metadescription}}">
        </div>
          @error('metadescription')
                <p class="text-red-700 font-semibold text-sm mt-1">{{ $message }}</p>
         @enderror

    </div>

    <button type="submit" class="btn b-solid btn-primary-solid px-5 cursor-pointer">Submit</button>
 </form>
@endsection
