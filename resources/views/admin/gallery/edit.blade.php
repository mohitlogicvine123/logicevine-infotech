@extends('layout.layout')

@section('content')
<form class="p-6" action="{{route('gallery.update',$edit->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
   <div class="mb-4">
    <select class="form-input form-select w-full singleSelect" name="imagealt">
        <option value="">..Select..</option>
        <option value="birthday" {{ $edit->imagealt == 'birthday' ? 'selected' : '' }}>Birthday</option>
        <option value="spacial-events" {{ $edit->imagealt == 'spacial-events' ? 'selected' : '' }}>Spacial Events</option>
        <option value="Celebration" {{ $edit->imagealt == 'Celebration' ? 'selected' : '' }}>Celebration</option>
    </select>

    @error('imagealt')
        <span class="error">{{ $message }}</span>
    @enderror
</div>


        <div class="mb-4">
            <label for="img" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">Image</label>
            <div class="flex">
        <input type="file" id="image" name="image" class="form-input rounded-l-none" placeholder="Enter Your image">
    </div>
    <img src="{{ asset('storage/' . $edit->image) }}"width="100px" alt="">
            @error('image')
                <p class="text-red-700 font-semibold text-sm mt-1">{{ $message }}</p>
         @enderror

    <button type="submit" class="btn b-solid btn-primary-solid px-5 cursor-pointer">Submit</button>
 </form>
@endsection
