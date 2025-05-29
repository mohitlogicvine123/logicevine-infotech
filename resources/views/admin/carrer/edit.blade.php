@extends('layout.layout')

@section('content')
<form class="p-6" action="{{route('carreer.update',$edit->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-4">
    <label for="title" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">Experience</label>
            <div class="flex">
         <input type="text" id="experience" name="experience" class="form-input rounded-l-none" placeholder="Enter Your Experience" value="{{$edit->experience}}">
            </div>
             @error('experience')
                <p class="text-red-700 font-semibold text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

    <div class="mb-4">
    <label for="title" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">Title</label>
            <div class="flex">
         <input type="text" id="title" name="title" class="form-input rounded-l-none" placeholder="Enter Your Title" value="{{$edit->title}}">
            </div>
             @error('title')
                <p class="text-red-700 font-semibold text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

    <button type="submit" class="btn b-solid btn-primary-solid px-5 cursor-pointer">Update</button>
 </form>
@endsection
