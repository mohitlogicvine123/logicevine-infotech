<!-- resources/views/index.blade.php -->

@extends('front-layouts.main')  <!-- Corrected the path to match your folder -->

@section('content')
   <!-- header -->
    <div class="relative">
        <div
            class="h-96 relative  overflow-hidden *:object-cover after:absolute after:top-0 after:left-0 after:h-full after:w-full after:bg-gradient-to-b from-slate-900/20 via-slate-900/30 to-slate-900">
            <img src="{{ asset('assets/img/blog.jpg') }}" alt="">
        </div>
        <div
            class="absolute top-1/2 -translate-y-1/2 flex items-center px-8 sm:px-12 md:px-16 h-full text-white mx-auto w-full">
            <div class="w-full">
                <div class="text-6xl md:text-[100px] font-bold !leading-[130%] text-center uppercase">
                    Blog Detail</div>

            </div>
        </div>
    </div>

    <section class="py-10">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 w-full">
            <div class="grid grid-cols-12">
                <div class="col-span-12 lg:col-span-8">
                    <div class="size-full rounded-md">
                      @forelse ($data as $item)
                        <div class="pb-14">
                            <div class="size-full rounded-md">
                                <img src="{{ asset('gallery').'/'.$item->image }}" alt="">
                            </div>
                            <div class="flex items-center gap-3 py-4 border-b flex-wrap ">
                                <div class="flex items-center gap-1 shrink-0"><span
                                        class="inline-block size-5 text-slate-700"><svg stroke="currentColor"
                                            fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="100%"
                                            width="100%" xmlns="http://www.w3.org/2000/svg">
                                            <g id="User">
                                                <g>
                                                    <path
                                                        d="M17.438,21.937H6.562a2.5,2.5,0,0,1-2.5-2.5V18.61c0-3.969,3.561-7.2,7.938-7.2s7.938,3.229,7.938,7.2v.827A2.5,2.5,0,0,1,17.438,21.937ZM12,12.412c-3.826,0-6.938,2.78-6.938,6.2v.827a1.5,1.5,0,0,0,1.5,1.5H17.438a1.5,1.5,0,0,0,1.5-1.5V18.61C18.938,15.192,15.826,12.412,12,12.412Z">
                                                    </path>
                                                    <path
                                                        d="M12,9.911a3.924,3.924,0,1,1,3.923-3.924A3.927,3.927,0,0,1,12,9.911Zm0-6.847a2.924,2.924,0,1,0,2.923,2.923A2.926,2.926,0,0,0,12,3.064Z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg></span><span class="text-sm text-slate-600 font-bold">BY :</span><a
                                        href="" class="inline-block text-sm font-semibold text-slate-500">ADMIN</a>
                                </div>
                                <div class="flex items-center gap-1 shrink-0">
                                
                                  <span
                                        class="inline-block size-5 text-slate-700"><svg stroke="currentColor" fill="none"
                                            stroke-width="1" viewBox="0 0 24 24" stroke-linecap="round"
                                            stroke-linejoin="round" height="100%" width="100%"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 9h8"></path>
                                            <path d="M8 13h6"></path>
                                            <path
                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z">
                                            </path>
                                        </svg></span><a href=""
                                        class="inline-block text-sm font-semibold text-slate-500">COMMENTS (0)</a>
                                </div>
                                <div class="flex items-center gap-1 shrink-0">
                                  
                                  <span
                                        class="inline-block size-5 text-slate-700"><svg stroke="currentColor"
                                            fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="100%"
                                            width="100%" xmlns="http://www.w3.org/2000/svg">
                                            <g id="Calendar_Date">
                                                <path
                                                    d="M18.435,4.955h-1.94v-1.41c0-0.26-0.23-0.51-0.5-0.5c-0.27,0.01-0.5,0.22-0.5,0.5v1.41h-7v-1.41c0-0.26-0.23-0.51-0.5-0.5c-0.27,0.01-0.5,0.22-0.5,0.5v1.41h-1.93c-1.38,0-2.5,1.12-2.5,2.5v11c0,1.38,1.12,2.5,2.5,2.5h12.87c1.38,0,2.5-1.12,2.5-2.5v-11C20.935,6.075,19.815,4.955,18.435,4.955z M19.935,18.455c0,0.83-0.67,1.5-1.5,1.5H5.565c-0.83,0-1.5-0.67-1.5-1.5v-8.42h15.87V18.455z M19.935,9.035H4.065v-1.58c0-0.83,0.67-1.5,1.5-1.5h1.93v0.59c0,0.26,0.23,0.51,0.5,0.5c0.27-0.01,0.5-0.22,0.5-0.5v-0.59h7v0.59c0,0.26,0.23,0.51,0.5,0.5c0.27-0.01,0.5-0.22,0.5-0.5v-0.59 h1.94c0.83,0,1.5,0.67,1.5,1.5V9.035z">
                                                </path>
                                                <path
                                                    d="M11.492,17.173v-3.46c0-0.059-0.064-0.095-0.114-0.064l-0.638,0.392 c-0.1,0.061-0.228-0.01-0.228-0.128v-0.651c0-0.105,0.055-0.203,0.146-0.257l0.764-0.457c0.047-0.028,0.1-0.043,0.154-0.043h0.626 c0.166,0,0.3,0.134,0.3,0.3v4.367c0,0.166-0.134,0.3-0.3,0.3h-0.409C11.626,17.473,11.492,17.339,11.492,17.173z">
                                                </path>
                                            </g>
                                        </svg></span><a href=""
                                        class="inline-block text-sm font-semibold text-slate-500">{{ \Carbon\Carbon::parse($item->created_at)->format('F j, Y') ??"OCTOBER 9, 2023" }}
                                    </a></div>
                            </div>
                            <div class="pt-9 pb-4"><a href="" class=" sm:text-4xl text-3xl font-semibold">
                                   {{ $item->heading ??'Make sure your software solution is the best one.'}}</a></div>
                            <div class="pb-6 sm:text-lg text-sm text-slate-500">
                                {{$item->description ??"Your product launch is a symbol of your innovation and a powerful asset that can enhance
                                your business.
                                Choosing the right development approach can be just as important as selecting the right
                                features.
                                Whether you're aiming for a traditional, user-friendly interface or a cutting-edge, modern
                                design, there
                                are countless ways to craft your software solution to perfectly suit your business needs.
                                From seamless
                                functionality to visually appealing designs, the approach you choose should reflect your
                                brand's vision
                                and the goals of your project. Whether you're prioritizing intuitive user experiences or
                                robust,
                                scalable architecture, your solution will stand as a lasting testament to your company's
                                success."}}
                            </div>
                              {{-- <div class=""><button
                                      class="flex justify-between text-slate-950 uppercase items-center overflow-hidden group/btn gap-4 z-20 relative sm:text-base text-sm "><span
                                          class="group-hover/btn:-translate-x-7  duration-300 w-7 h-[2px] bg-slate-950"></span>
                                      <span class="group-hover/btn:-translate-x-7 duration-300"> read more</span></button>
                              </div> --}}
                        </div>                        
                    @empty
                    @endforelse
                        {{-- <div class="pb-14">
                            <div class="size-full rounded-md *:aspect-[1/.5] *:size-full *:object-cover">
                                <img src="{{ asset('assets/img/blog-3.jpg') }}" alt="">
                            </div>
                            <div class="flex items-center gap-3 py-4 border-b flex-wrap ">
                                <div class="flex items-center gap-1 shrink-0"><span
                                        class="inline-block size-5 text-slate-700"><svg stroke="currentColor"
                                            fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="100%"
                                            width="100%" xmlns="http://www.w3.org/2000/svg">
                                            <g id="User">
                                                <g>
                                                    <path
                                                        d="M17.438,21.937H6.562a2.5,2.5,0,0,1-2.5-2.5V18.61c0-3.969,3.561-7.2,7.938-7.2s7.938,3.229,7.938,7.2v.827A2.5,2.5,0,0,1,17.438,21.937ZM12,12.412c-3.826,0-6.938,2.78-6.938,6.2v.827a1.5,1.5,0,0,0,1.5,1.5H17.438a1.5,1.5,0,0,0,1.5-1.5V18.61C18.938,15.192,15.826,12.412,12,12.412Z">
                                                    </path>
                                                    <path
                                                        d="M12,9.911a3.924,3.924,0,1,1,3.923-3.924A3.927,3.927,0,0,1,12,9.911Zm0-6.847a2.924,2.924,0,1,0,2.923,2.923A2.926,2.926,0,0,0,12,3.064Z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg></span><span class="text-sm text-slate-600 font-bold">BY :</span><a
                                        href="" class="inline-block text-sm font-semibold text-slate-500">ADMIN</a>
                                </div>
                                <div class="flex items-center gap-1 shrink-0"><span
                                        class="inline-block size-5 text-slate-700"><svg stroke="currentColor" fill="none"
                                            stroke-width="1" viewBox="0 0 24 24" stroke-linecap="round"
                                            stroke-linejoin="round" height="100%" width="100%"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 9h8"></path>
                                            <path d="M8 13h6"></path>
                                            <path
                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z">
                                            </path>
                                        </svg></span><a href=""
                                        class="inline-block text-sm font-semibold text-slate-500">COMMENTS (0)</a>
                                </div>
                                <div class="flex items-center gap-1 shrink-0"><span
                                        class="inline-block size-5 text-slate-700"><svg stroke="currentColor"
                                            fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="100%"
                                            width="100%" xmlns="http://www.w3.org/2000/svg">
                                            <g id="Calendar_Date">
                                                <path
                                                    d="M18.435,4.955h-1.94v-1.41c0-0.26-0.23-0.51-0.5-0.5c-0.27,0.01-0.5,0.22-0.5,0.5v1.41h-7v-1.41c0-0.26-0.23-0.51-0.5-0.5c-0.27,0.01-0.5,0.22-0.5,0.5v1.41h-1.93c-1.38,0-2.5,1.12-2.5,2.5v11c0,1.38,1.12,2.5,2.5,2.5h12.87c1.38,0,2.5-1.12,2.5-2.5v-11C20.935,6.075,19.815,4.955,18.435,4.955z M19.935,18.455c0,0.83-0.67,1.5-1.5,1.5H5.565c-0.83,0-1.5-0.67-1.5-1.5v-8.42h15.87V18.455z M19.935,9.035H4.065v-1.58c0-0.83,0.67-1.5,1.5-1.5h1.93v0.59c0,0.26,0.23,0.51,0.5,0.5c0.27-0.01,0.5-0.22,0.5-0.5v-0.59h7v0.59c0,0.26,0.23,0.51,0.5,0.5c0.27-0.01,0.5-0.22,0.5-0.5v-0.59 h1.94c0.83,0,1.5,0.67,1.5,1.5V9.035z">
                                                </path>
                                                <path
                                                    d="M11.492,17.173v-3.46c0-0.059-0.064-0.095-0.114-0.064l-0.638,0.392 c-0.1,0.061-0.228-0.01-0.228-0.128v-0.651c0-0.105,0.055-0.203,0.146-0.257l0.764-0.457c0.047-0.028,0.1-0.043,0.154-0.043h0.626 c0.166,0,0.3,0.134,0.3,0.3v4.367c0,0.166-0.134,0.3-0.3,0.3h-0.409C11.626,17.473,11.492,17.339,11.492,17.173z">
                                                </path>
                                            </g>
                                        </svg></span><a href=""
                                        class="inline-block text-sm font-semibold text-slate-500">OCTOBER 9, 2023
                                    </a></div>
                            </div>
                            <div class="pt-9 pb-4"><a href="" class=" sm:text-4xl text-3xl font-semibold">
                                    You must need a great developer. </a></div>
                            <div class="pb-6 sm:text-lg text-sm text-slate-500">
                                Your software solution is a powerful representation of your innovation and a key element
                                that can
                                enhance your business's growth. Selecting the right development process is just as crucial
                                as choosing
                                the right features. Whether you're aiming for a traditional, user-friendly design or a
                                sleek, modern
                                interface, there are countless ways to develop your solution to fit your business
                                objectives. From
                                intuitive functionality to cutting-edge features, the development approach should align with
                                your
                                company's goals and vision. Whether focusing on seamless performance or innovative
                                technology, your
                                software will be the cornerstone of your success.

                            </div>
                            <div class=""><button
                                    class="flex justify-between text-slate-950 uppercase items-center overflow-hidden group/btn gap-4 z-20 relative sm:text-base text-sm "><span
                                        class="group-hover/btn:-translate-x-7  duration-300 w-7 h-[2px] bg-slate-950"></span>
                                    <span class="group-hover/btn:-translate-x-7 duration-300"> read more</span></button>
                            </div>
                        </div>
                        <div class="pb-14">
                            <div class="size-full rounded-md aspect-[1/.5] *:size-full *:object-cover">
                                <img src="{{ asset('assets/img/blog-4.jpg') }}" alt="">
                            </div>
                            <div class="flex items-center gap-3 py-4 border-b flex-wrap ">
                                <div class="flex items-center gap-1 shrink-0"><span
                                        class="inline-block size-5 text-slate-700"><svg stroke="currentColor"
                                            fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="100%"
                                            width="100%" xmlns="http://www.w3.org/2000/svg">
                                            <g id="User">
                                                <g>
                                                    <path
                                                        d="M17.438,21.937H6.562a2.5,2.5,0,0,1-2.5-2.5V18.61c0-3.969,3.561-7.2,7.938-7.2s7.938,3.229,7.938,7.2v.827A2.5,2.5,0,0,1,17.438,21.937ZM12,12.412c-3.826,0-6.938,2.78-6.938,6.2v.827a1.5,1.5,0,0,0,1.5,1.5H17.438a1.5,1.5,0,0,0,1.5-1.5V18.61C18.938,15.192,15.826,12.412,12,12.412Z">
                                                    </path>
                                                    <path
                                                        d="M12,9.911a3.924,3.924,0,1,1,3.923-3.924A3.927,3.927,0,0,1,12,9.911Zm0-6.847a2.924,2.924,0,1,0,2.923,2.923A2.926,2.926,0,0,0,12,3.064Z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg></span><span class="text-sm text-slate-600 font-bold">BY :</span><a
                                        href="" class="inline-block text-sm font-semibold text-slate-500">ADMIN</a>
                                </div>
                                <div class="flex items-center gap-1 shrink-0"><span
                                        class="inline-block size-5 text-slate-700"><svg stroke="currentColor"
                                            fill="none" stroke-width="1" viewBox="0 0 24 24" stroke-linecap="round"
                                            stroke-linejoin="round" height="100%" width="100%"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 9h8"></path>
                                            <path d="M8 13h6"></path>
                                            <path
                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z">
                                            </path>
                                        </svg></span><a href=""
                                        class="inline-block text-sm font-semibold text-slate-500">COMMENTS (0)</a>
                                </div>
                                <div class="flex items-center gap-1 shrink-0"><span
                                        class="inline-block size-5 text-slate-700"><svg stroke="currentColor"
                                            fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="100%"
                                            width="100%" xmlns="http://www.w3.org/2000/svg">
                                            <g id="Calendar_Date">
                                                <path
                                                    d="M18.435,4.955h-1.94v-1.41c0-0.26-0.23-0.51-0.5-0.5c-0.27,0.01-0.5,0.22-0.5,0.5v1.41h-7v-1.41c0-0.26-0.23-0.51-0.5-0.5c-0.27,0.01-0.5,0.22-0.5,0.5v1.41h-1.93c-1.38,0-2.5,1.12-2.5,2.5v11c0,1.38,1.12,2.5,2.5,2.5h12.87c1.38,0,2.5-1.12,2.5-2.5v-11C20.935,6.075,19.815,4.955,18.435,4.955z M19.935,18.455c0,0.83-0.67,1.5-1.5,1.5H5.565c-0.83,0-1.5-0.67-1.5-1.5v-8.42h15.87V18.455z M19.935,9.035H4.065v-1.58c0-0.83,0.67-1.5,1.5-1.5h1.93v0.59c0,0.26,0.23,0.51,0.5,0.5c0.27-0.01,0.5-0.22,0.5-0.5v-0.59h7v0.59c0,0.26,0.23,0.51,0.5,0.5c0.27-0.01,0.5-0.22,0.5-0.5v-0.59 h1.94c0.83,0,1.5,0.67,1.5,1.5V9.035z">
                                                </path>
                                                <path
                                                    d="M11.492,17.173v-3.46c0-0.059-0.064-0.095-0.114-0.064l-0.638,0.392 c-0.1,0.061-0.228-0.01-0.228-0.128v-0.651c0-0.105,0.055-0.203,0.146-0.257l0.764-0.457c0.047-0.028,0.1-0.043,0.154-0.043h0.626 c0.166,0,0.3,0.134,0.3,0.3v4.367c0,0.166-0.134,0.3-0.3,0.3h-0.409C11.626,17.473,11.492,17.339,11.492,17.173z">
                                                </path>
                                            </g>
                                        </svg></span><a href=""
                                        class="inline-block text-sm font-semibold text-slate-500">OCTOBER 9, 2023
                                    </a></div>
                            </div>
                            <div class="pt-9 pb-4"><a href="" class=" sm:text-4xl text-3xl font-semibold">Top 10
                                    Software Development
                                    Approaches
                                </a></div>
                            <div class="pb-6 sm:text-lg text-sm text-slate-500">Your software solution is a powerful
                                reflection of
                                your business’s innovation and success. Just like choosing the right features, selecting the
                                best
                                development approach is crucial. Whether your goal is traditional, user-friendly, or
                                cutting-edge, here
                                are ten key approaches to help you create the perfect software solution:


                            </div>
                            <div class=""><button
                                    class="flex justify-between text-slate-950 uppercase items-center overflow-hidden group/btn gap-4 z-20 relative sm:text-base text-sm "><span
                                        class="group-hover/btn:-translate-x-7  duration-300 w-7 h-[2px] bg-slate-950"></span>
                                    <span class="group-hover/btn:-translate-x-7 duration-300"> read more</span></button>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-5 lg:col-span-4">
                    <div class="size-full lg:ps-20">
                        <div class="">
                            <div class="text-2xl pb-5  font-semibold">Search</div>
                            <div class="flex items-center gap-4 w-full pb-4">
                                <div class="py-[1.5px] rounded-lg bg-yellow-400 w-14 "></div>
                                <div class="py-[1.5px] rounded-lg bg-yellow-200 w-full"></div>
                            </div>
                            <div class="pt-5">
                                <div class="flex items-center bg-slate-100 px-4"><input
                                        class="h-[70px] bg-transparent w-full  focus:border-none focus:outline-0"
                                        placeholder="Search..." type="text"><button
                                        class="h-12 w-14 *:size-6 bg-yellow-500 text-white flex items-center justify-center "><svg
                                            stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 512 512" height="100%" width="100%"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" stroke-miterlimit="10" stroke-width="32"
                                                d="M221.09 64a157.09 157.09 0 1 0 157.09 157.09A157.1 157.1 0 0 0 221.09 64z">
                                            </path>
                                            <path fill="none" stroke-linecap="round" stroke-miterlimit="10"
                                                stroke-width="32" d="M338.29 338.29 448 448"></path>
                                        </svg></button></div>
                            </div>
                        </div>
                        <div class="pt-16">
                            <div class="text-2xl pb-5 font-semibold">Categories</div>
                            <div class="flex items-center gap-4 w-full pb-4">
                                <div class="py-[1.5px] rounded-lg bg-yellow-400 w-14 "></div>
                                <div class="py-[1.5px] rounded-lg bg-yellow-200 w-full"></div>
                            </div>
                            <div class="pt-5">
                                <ul>
                                    <li><a href="#" class="font-semibold text-[15px] py-1">App Development</a></li>
                                    <li class="pt-5"><a href="#" class="font-semibold text-[15px] py-1">Taxi
                                            App</a></li>
                                    <li class="pt-5"><a href="#" class="font-semibold text-[15px] py-1">School
                                            Software</a></li>
                                    <li class="pt-5"><a href="#" class="font-semibold text-[15px] py-1">web
                                            Development</a></li>
                                    <li class="pt-5"><a href="#" class="font-semibold text-[15px] py-1">Treandimg
                                            eCommerce Solution</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pt-16">
                            <div class="text-2xl pb-5 font-semibold">Recent Posts</div>
                            <div class="flex items-center gap-4 w-full pb-4">
                                <div class="py-[1.5px] rounded-lg bg-yellow-400 w-14 "></div>
                                <div class="py-[1.5px] rounded-lg bg-yellow-200 w-full"></div>
                            </div>
                            <div class="flex  flex-nowrap gap-5 pt-4">
                                <div class="w-1/3 !shrink-0"><a href="#"
                                        class="inline-block aspect-[1/.6] *:object-cover *:size-full">
                                        <img src="{{ asset('assets/img/blog-4.jpg') }}" alt="">
                                    </a></div>
                                <div class="w-9/12">
                                    <div class=""><a class="text-lg font-medium leading-[100%]" href="">How
                                            to create a taxi rid App like
                                            Ola and Uber</a></div>
                                    <div class="flex items-center gap-3 pt-2"><span
                                            class="inline-block size-4 text-slate-500"><svg stroke="currentColor"
                                                fill="currentColor" stroke-width="1" viewBox="0 0 24 24" height="100%"
                                                width="100%" xmlns="http://www.w3.org/2000/svg">
                                                <g id="Stopwatch">
                                                    <path
                                                        d="M17.925,7.828c1.226,1.391 1.97,3.217 1.97,5.215c0,4.358 -3.537,7.895 -7.895,7.895c-4.358,0 -7.896,-3.537 -7.896,-7.895c0,-4.189 3.271,-7.621 7.396,-7.879l0,-1.103l-1.587,0c-0.645,0 -0.643,-1 -0,-1l4.174,0c0.645,0 0.644,1 -0,1l-1.587,0l0,1.103c1.803,0.113 3.443,0.832 4.718,1.956c0.378,-0.378 0.756,-0.756 1.135,-1.134c0.197,-0.198 0.507,-0.183 0.707,-0c0.199,0.183 0.185,0.522 -0,0.707l-1.135,1.135Zm0.97,5.215c0,-3.805 -3.089,-6.895 -6.895,-6.895c-3.806,0.001 -6.896,3.09 -6.896,6.895c0,3.806 3.09,6.895 6.896,6.895c3.806,0 6.895,-3.089 6.895,-6.895Zm-6.395,0.001c0,0.645 -1,0.643 -1,-0l0,-4.704c0,-0.644 1,-0.643 1,-0l0,4.704Z">
                                                    </path>
                                                </g>
                                            </svg></span><span
                                            class="inline-block text-[13px] font-semibold text-slate-500">09 Oct
                                            2023</span></div>
                                </div>
                            </div>
                            <div class="flex  flex-nowrap gap-5 pt-4">
                                <div class="w-1/3 !shrink-0"><a href="#"
                                        class="inline-block aspect-[1/.6] *:object-cover *:size-full">
                                        <img src="./assets/img/u4b-square.png" alt="">
                                    </a></div>
                                <div class="w-9/12">
                                    <div class=""><a class="text-lg font-medium leading-[100%]" href="">10
                                            Best Taxi App in India You
                                            Should Know Before 2025</a></div>
                                    <div class="flex items-center gap-3 pt-2"><span
                                            class="inline-block size-4 text-slate-500"><svg stroke="currentColor"
                                                fill="currentColor" stroke-width="1" viewBox="0 0 24 24" height="100%"
                                                width="100%" xmlns="http://www.w3.org/2000/svg">
                                                <g id="Stopwatch">
                                                    <path
                                                        d="M17.925,7.828c1.226,1.391 1.97,3.217 1.97,5.215c0,4.358 -3.537,7.895 -7.895,7.895c-4.358,0 -7.896,-3.537 -7.896,-7.895c0,-4.189 3.271,-7.621 7.396,-7.879l0,-1.103l-1.587,0c-0.645,0 -0.643,-1 -0,-1l4.174,0c0.645,0 0.644,1 -0,1l-1.587,0l0,1.103c1.803,0.113 3.443,0.832 4.718,1.956c0.378,-0.378 0.756,-0.756 1.135,-1.134c0.197,-0.198 0.507,-0.183 0.707,-0c0.199,0.183 0.185,0.522 -0,0.707l-1.135,1.135Zm0.97,5.215c0,-3.805 -3.089,-6.895 -6.895,-6.895c-3.806,0.001 -6.896,3.09 -6.896,6.895c0,3.806 3.09,6.895 6.896,6.895c3.806,0 6.895,-3.089 6.895,-6.895Zm-6.395,0.001c0,0.645 -1,0.643 -1,-0l0,-4.704c0,-0.644 1,-0.643 1,-0l0,4.704Z">
                                                    </path>
                                                </g>
                                            </svg></span><span
                                            class="inline-block text-[13px] font-semibold text-slate-500">09 Oct
                                            2023</span></div>
                                </div>
                            </div>
                            <div class="flex  flex-nowrap gap-5 pt-4">
                                <div class="w-1/3 !shrink-0"><a href="#"
                                        class="inline-block aspect-[1/.6] *:object-cover *:size-full">
                                        <img src="./assets/img/ecommerce.jpg" alt="">
                                    </a></div>
                                <div class="w-9/12">
                                    <div class=""><a class="text-lg font-medium leading-[100%]" href="">Top
                                            30 Features of eCommerce
                                            App</a></div>
                                    <div class="flex items-center gap-3 pt-2"><span
                                            class="inline-block size-4 text-slate-500"><svg stroke="currentColor"
                                                fill="currentColor" stroke-width="1" viewBox="0 0 24 24" height="100%"
                                                width="100%" xmlns="http://www.w3.org/2000/svg">
                                                <g id="Stopwatch">
                                                    <path
                                                        d="M17.925,7.828c1.226,1.391 1.97,3.217 1.97,5.215c0,4.358 -3.537,7.895 -7.895,7.895c-4.358,0 -7.896,-3.537 -7.896,-7.895c0,-4.189 3.271,-7.621 7.396,-7.879l0,-1.103l-1.587,0c-0.645,0 -0.643,-1 -0,-1l4.174,0c0.645,0 0.644,1 -0,1l-1.587,0l0,1.103c1.803,0.113 3.443,0.832 4.718,1.956c0.378,-0.378 0.756,-0.756 1.135,-1.134c0.197,-0.198 0.507,-0.183 0.707,-0c0.199,0.183 0.185,0.522 -0,0.707l-1.135,1.135Zm0.97,5.215c0,-3.805 -3.089,-6.895 -6.895,-6.895c-3.806,0.001 -6.896,3.09 -6.896,6.895c0,3.806 3.09,6.895 6.896,6.895c3.806,0 6.895,-3.089 6.895,-6.895Zm-6.395,0.001c0,0.645 -1,0.643 -1,-0l0,-4.704c0,-0.644 1,-0.643 1,-0l0,4.704Z">
                                                    </path>
                                                </g>
                                            </svg></span><span
                                            class="inline-block text-[13px] font-semibold text-slate-500">09 Oct
                                            2023</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
