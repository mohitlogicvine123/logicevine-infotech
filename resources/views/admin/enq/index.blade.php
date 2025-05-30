@extends('layout.layout')

@section('content')
<div class="overflow-x-auto mt-5">

    <div class="aleart aleart-success-light aleart-image">
    <div class="flex-center gap-2.5">
        <img src="{{ asset('storage/' . (auth()->user()->image ?? 'default-user.png')) }}" alt="user" class="size-8 rounded-50">
       {{ session('success') }}
    </div>
    <button class="close-button">
        <i class="ri-close-line text-inherit"></i>
    </button>
</div>

    <table class="table-auto border-collapse w-full whitespace-nowrap text-left text-gray-500 dark:text-dark-text font-medium">
        <thead>
            <tr>
                <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">Id</th>
                <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">Name</th>
                <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">Email</th>
                <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">Number</th>
                <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">Company-name</th>
                <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">Message</th>
                <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one w-10">Action</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 dark:divide-dark-border-three">
            @foreach ($contact as  $con)
            <tr>
                <td class="p-6 py-4 dk-border-one">{{ $con->id }}</td>
                <td class="p-6 py-4 dk-border-one">{{ $con->name}}</td>
                <td class="p-6 py-4 dk-border-one">{{ $con->email }}</td>
                <td class="p-6 py-4 dk-border-one">{{ $con->number }}</td>
                <td class="p-6 py-4 dk-border-one">{{ $con->company_name }}</td>
                <td class="p-6 py-4 dk-border-one">{{ $con->message }}</td>
                <td class="p-6 py-4 dk-border-one">
                    <div class="flex items-center gap-2">
                     {{-- <a href="{{ route('carreer.edit', $con->id) }}" class="btn-icon btn-primary-icon-light size-7 btn b-outline btn-success-outline">
                    <i class="ri-edit-line text-inherit text-[13px]"></i>
                     </a> --}}
                        <form action="{{route('destroy',$con->id)}}" method="POST" onsubmit="return confirm('Are you sure?')">
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

