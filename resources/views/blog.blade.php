@extends('front-layouts.main')
@section('title', 'Expert Web Development & Tech Blogs - Logicvine')
@section('content')
    <!-- ***** page heading section start ***** -->
    <section class="breadcrumb-section relative lg:pt-52 md:pt-48 pt-32 pb-10 bg-[url('/assets/img/breadcrumb-bg1.png'),_linear-gradient(180deg,_#121212_0%,_#121212_100%)] bg-cover bg-center">
        <div class="container xl:px-[18px] md:px-4 px-3.5 mx-auto">
            <div class="relative">
                <div class="">
                    <ul class="inline-flex rounded-full border border-stone-600 md:gap-3 gap-2.5 py-2 md:px-6 px-5">
                        <li class="text-theme2 text-sm"><a href="/">Home</a></li>
                        <li class="text-white relative text-sm before:content-[''] before:w-[8px] before:h-[2px] before:left-0 before:top-1/2 before:-translate-y-1/2 before:bg-white before:absolute pl-5">Blogs</li>
                    </ul>
                    <h1 class="text-white font-bold md:mt-6 mt-4 lg:text-[42px] md:text-[38px] sm:text-[32px] text-[22px] max-md:leading-[40px]">Latest Blogs & Insights from Logicvine Infotech</h1>
                </div>
                <div class="md:mt-12 sm:mt-10 mt-4 flex items-center justify-center animate-up-down2">
                    <a href="javascript:;" id="scrollbtn" class="border border-[#ffffff80] sm:py-6 py-5 md:px-2.5 px-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-[#ffffff80] sm:h-[29px] h-[24px]" fill="none" viewBox="0 0 19 29">
                            <path d="M9.5 0V28M9.5 28C10 24.3333 12.4 17.1 18 17.5M9.5 28C8.5 24.1667 5.4 16.7 1 17.5"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** page heading section end ***** -->

    <!-- blog section start -->
    <section class="my-10" id="scrollsection">
        <div class="container xl:px-[18px] md:px-4 px-3.5 mx-auto">
            <div class="grid grid-cols-3 gap-4 w-full">
                @foreach($blogs as $data)
                <div class="overflow-hidden bg-white rounded-[8px] shadow-lg h-full sm:p-2 p-1.5 border">
                    <div class="relative">
                        <a href="#" title="" class="inline-block overflow-hidden rounded-[8px] group h-[230px] w-full">
                            <img class="object-cover w-full h-full group-hover:scale-125 transition-all duration-300 ease-in-out" src="{{asset('storage/'.$data->image)}}" alt="" />
                        </a>
                        <div class="absolute top-2 left-2">
                            <span class="px-4 py-2 md:text-xs text-[12px] font-semibold tracking-widest text-gray-900 uppercase bg-white rounded-full"> dfdf </span>
                        </div>
                    </div>
                    <div class="px-1 md:pt-2.5 pt-2">
                        <div class="block text-[14px] font-medium text-gray-800 uppercase">
                            <i class="fa-regular fa-calendar-days mr-0.5"></i>
                            April 04, 2020
                        </div>
                        <div class="mt-3 md:text-lg sm:text-[17px] text-[16px] font-semibold">
                            <a href="#" title="" class="text-black hover:text-theme2 transition-all ease-in-out duration-300">
                              {{$data->title}}
                            </a>
                        </div>
                        <p class="md:mt-2.5 mt-2 text-[15px] text-gray-800 leading-[25px] line-clamp-3">{{$data->description ?? 'Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.'}}</p>
                        <a href="" title="" class="flex items-center justify-between pb-1 mt-3 pt-3 border-t text-base font-medium text-gray-900 transition-all duration-500 hover:text-yellow-500">
                            Continue Reading
                            <svg class="size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- blog section end -->
@endsection
