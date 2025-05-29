@extends('layout.layout')

@section('content')
<div class="overflow-x-auto mt-5">
    @if(session('success')) <p style="color:green">{{ session('success') }}</p> @endif
    <table class="table-auto border-collapse w-full whitespace-nowrap text-left text-gray-500 dark:text-dark-text font-medium">
        <thead>
            <tr>
                <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">Title</th>
                <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">Description</th>
                <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">image</th>
                <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">Image-Alt</th>
                <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">Category</th>
                <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">Author</th>
                <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">Meta-Key</th>
                <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">Meta-Tital</th>
                <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">Meta-Description</th>
                <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one w-10">Action</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 dark:divide-dark-border-three">
            @foreach ($blogs as  $blog)
            <tr>
                <td class="p-6 py-4 dk-border-one">{{ $blog->title }}</td>
                <td class="p-6 py-4 dk-border-one">{{ $blog->description }}</td>
                 <td>
                 <img src="{{asset('storage/'.$blog->image)}}" alt="ind Image" style="width:100px;">
                     <td class="p-6 py-4 dk-border-one">{{ $blog->imagealt }}</td>
                <td class="p-6 py-4 dk-border-one">{{ $blog->category }}</td>
                <td class="p-6 py-4 dk-border-one">{{ $blog->author }}</td>
                <td class="p-6 py-4 dk-border-one">{{ $blog->metakey }}</td>
                <td class="p-6 py-4 dk-border-one">{{ $blog->metatital }}</td>
                <td class="p-6 py-4 dk-border-one">{{ $blog->metadescription }}</td>
                <td class="p-6 py-4 dk-border-one">
                    <div class="flex items-center gap-2">
                     <a href="{{ route('blog.edit', $blog->id) }}" class="btn-icon btn-primary-icon-light size-7 btn b-outline btn-success-outline">
                    <i class="ri-edit-line text-inherit text-[13px]"></i>
                     </a>
                        <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-icon btn-danger-icon-light size-7 btn b-outline btn-danger-outline">
                                <i class="ri-delete-bin-line text-inherit text-[13px]"></i>
                            </button>
                        </form>

                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
