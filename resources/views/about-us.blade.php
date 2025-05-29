<!-- resources/views/index.blade.php -->

@extends('front-layouts.main')  <!-- Corrected the path to match your folder -->

@section('content')
     <!-- ***** page heading section start ***** -->
    <section class="breadcrumb-section relative lg:pt-52 md:pt-48 pt-32 pb-10 bg-[url('/assets/img/breadcrumb-bg1.png'),_linear-gradient(180deg,_#121212_0%,_#121212_100%)] bg-cover bg-center">   
        <div class="container xl:px-[18px] md:px-4 px-3.5 mx-auto">
            <div class="relative">
                <div class="">
                    <ul class="inline-flex rounded-full border border-stone-600 md:gap-3 gap-2.5 py-2 md:px-6 px-5">
                        <li class="text-theme2 text-sm"><a href="/">Home</a></li>
                        <li class="text-white relative text-sm before:content-[''] before:w-[8px] before:h-[2px] before:left-0 before:top-1/2 before:-translate-y-1/2 before:bg-white before:absolute pl-5">About Us</li>
                    </ul>
                    <h1 class="text-white font-bold md:mt-6 mt-4 lg:text-[42px] md:text-[38px] sm:text-[32px] text-[22px] max-md:leading-[40px]">About Logicvine Infotech</h1>
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

    <!-- ***** about section start ***** -->
    <section class="py-12 md:py-14 bg-gray-100/80">
        <div class="container xl:px-[18px] md:px-4 px-3.5 mx-auto overflow-hidden">
            <div class="grid items-center grid-cols-1 lg:grid-cols-5 lg:gap-12 md:gap-8 sm:gap-6 gap-5">
                <div class="lg:col-span-2">
                    <div class="rounded-xl overflow-hidden lg:h-[385px]">
                        <img class="h-full w-full" src="{{ asset('assets/img/aboutimg.jpg') }}" alt="about us" />
                        <!-- <img class="w-full rounded-md z-10 absolute inset-0 size-full scale-y-[127%] scale-x-[120%] drop-shadow-xl"
                            src="{{ asset('assets/img/mainmask1.png') }}" alt="" /> -->
                    </div>
                </div>
                <div class="lg:col-span-3">
                    <div class="flex gap-2 items-center">
                        <div class="flex items-center justify-center sm:size-14 size-12 bg-theme2/50 rounded-full">
                        <div class="sm:size-10 size-9 rounded-full bg-theme2 flex justify-center items-center">
                            <svg class="md:size-8 size-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        </div>
                        <div class="font-semibold md:text-lg text-[16px] text-theme2">LogicVine Infotech</div>
                    </div>
                    <div class="heading-part mt-3">
                        <h2 class="text-black lg:text-[38px] md:text-[32px] sm:text-[26px] text-[22px] lg:leading-[50px] font-semibold">Leading the Way in <span class="text-theme2">Digital Solutions.</span></h2>
                        <div class="relative bg-theme2 md:h-[6px] h-[5px] md:w-[100px] w-[90px] rounded-[30px] md:mt-2 mt-[5px]">
                            <div class="absolute left-0 top-[-1.9px] bg-white h-[10px] w-[10px] rounded-full animate-bounce-custom"></div>
                        </div>
                    </div>
                    <div class="md:mt-5 mt-4">
                        <p class="md:text-[16px] sm:text-[15px] text-[14.5px] md:leading-[29px] leading-[27px] text-gray-700">Here at Flowbite we focus on
                            markets where technology, innovation, and capital can unlock long-term value and drive economic
                            growth.
                        </p>
                        <p class="md:text-[16px] sm:text-[15px] text-[14.5px] md:leading-[29px] leading-[27px] md:mt-3 mt-2 text-gray-700">At Logic Vine, we believe that technology is not
                            just a
                            tool but a catalyst for transformation. Founded on the principles of innovation, integrity, and
                            excellence,
                            we are dedicated to empowering businesses with tailored IT solutions that drive success and
                            efficiency. .
                        </p>
                    </div>
                    <div class="flex md:mt-6 mt-4">
                        <a href="{{ route('web.contact-us') }}" class="border-2 border-theme2 group text-[15px] text-theme2 py-2.5 px-8 rounded-[10px] font-medium relative overflow-hidden before:content=[''] before:top-0 before:left-0 before:w-[50%] before:duration-300 before:h-0 before:absolute before:bg-theme2 hover:before:h-full before:content=[''] after:bottom-0 after:right-0 after:w-[50%] after:duration-300 after:h-0 after:absolute after:bg-theme2 hover:after:h-full">
                            <span class="relative group-hover:text-white duration-300 z-10"> Coffee With Us</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** about section end ***** -->

    <!-- ***** mission vision section start ***** -->
    <section class="">
        <div class="grid lg:grid-cols-2">
            <div>
                <img src="{{asset('assets/img/mission-vision-img.jpg')}}" alt="mission vision" class="size-full object-cover">
            </div>
            <div class="bg-theme1">
                <div class="grid sm:grid-cols-2 h-full">
                    <div class="md:py-20 sm:py-16 max-sm:pb-8 py-14 lg:px-9 mx:px-6 px-4 sm:border-r max-sm:border-b relative border-gray-600 h-full">
                        <div class="md:text-[55px] sm:text-[45px] text-[35px] text-white font-bold tracking-[2px] absolute md:top-[25px] top-[15px] opacity-10">Mission</div>
                        <div class="md:text-[20px] text-white font-semibold">Our Mission</div>
                        <p class="md:mt-4 mt-3 text-gray-200 text-[14px] md:leading-[29px] leading-[27px]">At Logicvine Infotech, our mission is to empower businesses with innovative, scalable, and efficient IT solutions. We are committed to delivering high-quality web development, software solutions, and digital transformation strategies that drive success. Our goal is to bridge the gap between technology and business needs, ensuring seamless integration and sustainable growth.</p>
                    </div>
                    <div class="md:py-20 sm:py-16 max-sm:pb-8 py-14 lg:px-9 mx:px-6 px-4 relative h-full">
                        <div class="md:text-[55px] sm:text-[45px] text-[35px] text-white font-bold tracking-[2px] absolute md:top-[25px] top-[15px] opacity-10">Vision</div>
                        <div class="md:text-[20px] text-white font-semibold">Our Vision</div>
                        <p class="md:mt-4 mt-3 text-gray-200 text-[14px] md:leading-[29px] leading-[27px]">Our vision is to be a leading IT solutions provider, recognized for our cutting-edge technologies, client-centric approach, and commitment to excellence. We aim to create a future where businesses of all sizes can leverage digital innovation to enhance productivity, efficiency, and global reach. Through continuous learning and adaptation, we strive to remain at the forefront of the tech industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** mission vision section end ***** -->

    <!-- ***** counter section start ***** -->
    <section class="pt-10 sm:pt-12 md:pb-14 pb-12 bg-gray-100/80">
        <div class="container xl:px-[18px] md:px-4 px-3.5 mx-auto">
            <div class="heading-part">
                <h2 class="text-black lg:text-[38px] md:text-[32px] sm:text-[26px] text-[22px] lg:leading-[50px] text-center font-semibold">Expertise & Success <span class="text-theme2">Stories</span></h2>
                <div class="relative bg-theme2 md:h-[6px] h-[5px] md:w-[100px] w-[90px] mx-auto rounded-[30px] md:mt-2 mt-[5px]">
                    <div class="absolute left-0 top-[-1.9px] bg-white h-[10px] w-[10px] rounded-full animate-bounce-custom"></div>
                </div>
                <p class="md:text-[16px] text-[14px] text-center font-medium text-balance md:mt-4 mt-3.5 text-slate-950 md:leading-[27px] leading-[25px]">
                    Here at Flowbite we focus on markets where technology, innovation, and capital <br> can unlock long-term value and drive economic growth.
                </p>
            </div>
            <div class="grid md:grid-cols-4 sm:grid-cols-2 grid-cols-1 md:mt-8 mt-5 lg:gap-6 gap-4">
                <div class="bg-white p-2 shadow-sm rounded-lg group animatecard">
                    <div class="border-gray-300 border text-center border-dashed lg:p-8 md:p-6 p-4 rounded-lg relative before:content-[''] before:w-[95%] before:h-full before:top-0 before:left-0 before:bg-[url(../assets/img/counter-bg-3.png)] before:absolute before:-z-0 before:scale-0 before:transition-all before:duration-500 before:ease-in-out group-hover:before:scale-100">
                        <div class="flex items-center transition-all ease-in-out duration-300 group-hover:bg-theme2 justify-center rounded-xl lg:size-[80px] md:size-[70px] size-[60px] mx-auto bg-gray-900 relative">
                            <svg fill="#fff" class="transition-all md:h-[40px] h-[30px] ease-in-out group-hover:animate-bounceIn" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 426 511.48"><path d="M338.35 336.19c48.4 0 87.65 39.25 87.65 87.65 0 48.39-39.25 87.64-87.65 87.64-48.39 0-87.64-39.25-87.64-87.64 0-48.4 39.25-87.65 87.64-87.65zm-234.3 19.52c12.55 0 22.7 10.17 22.7 22.7 0 12.55-10.18 22.7-22.7 22.7-12.55 0-22.71-10.17-22.71-22.7s10.18-22.7 22.71-22.7zm-76.1 125.75C12.64 481.46 0 468.81 0 453.51V96.07c0-15.38 12.61-27.99 28-27.99h45.05v-8.8c0-10.3 8.51-18.75 18.8-18.75h30.57V20.79C122.42 9.45 131.75 0 143.11 0H250.4c11.43 0 20.78 9.38 20.78 20.79v19.79h26.35c10.3 0 18.79 8.56 18.79 18.84v8.81h45.06c15.34 0 27.99 12.59 27.99 27.94v220.79c-7.39-3.5-15.2-6.39-23.2-8.27V94.11c0-1.62-1.21-2.83-2.82-2.83h-47.03v15.32c0 10.28-8.57 18.74-18.84 18.74H91.8c-10.3 0-18.75-8.5-18.75-18.78V91.23H25.98c-1.55 0-2.83 1.29-2.83 2.83v361.32c0 1.56 1.31 2.88 2.88 2.88l199 .05c2.49 8.07 5.74 15.74 9.85 23.09-96.13 0-206.93 0-206.93.06zm236.29-417.9c-7.92 0-16.63-4.18-16.63-13.2V23.23H145.92v27.13c0 8.35-7.93 13.2-15.57 13.2H97.01v40.58h195.35V63.56h-28.12zm-81.38 250.69h-68.68v26.89H93.92v-37c0-5.6 4.54-10.14 10.13-10.14h78.25l-.32-31.37c-4.04-1.19-8.12-2.77-11.75-4.91l-6.3 6.94c-2.31 2.38-6.18 2.52-8.67.32l-9.25-8.66c-2.42-2.4-2.81-6.05-.35-8.57l6.92-7.47c-2.18-3.82-3.76-7.58-4.98-11.81l-9.24.38c-3.37.12-6.22-2.5-6.36-5.87l-.49-12.67c-.12-3.45 2.39-6.23 5.86-6.36l10.09-.39c1.17-4.05 2.77-8.17 4.91-11.81l-6.82-6.29c-2.55-2.37-2.72-6.13-.36-8.69l8.51-9.25c2.4-2.44 6.02-2.8 8.56-.35l7.6 6.9c3.78-2.25 7.41-3.76 11.64-4.98l-.37-9.24c-.13-3.37 2.5-6.23 5.86-6.36l12.67-.48c3.45-.12 6.24 2.4 6.36 5.87l.39 10.09c4.1 1.21 8.05 2.73 11.74 4.91l6.3-6.81c2.36-2.54 6.13-2.71 8.69-.36l.12.11 9.25 8.5c2.45 2.41 2.81 6.03.35 8.57l-6.9 7.6c2.2 3.82 3.73 7.45 4.98 11.68l9.25-.37c3.36-.13 6.22 2.5 6.35 5.86l.5 12.67c.12 3.45-2.39 6.23-5.86 6.36l-10.09.39c-1.2 4.03-2.77 8.12-4.92 11.75l6.94 6.29c2.44 2.35 2.49 6.11.33 8.67l-8.67 9.27c-2.24 2.53-6.13 2.7-8.57.35l-7.47-6.92c-3.82 2.19-7.58 3.76-11.8 4.97l.31 31.5h78.06c5.59 0 10.13 4.54 10.13 10.14v9.35l-.33.13-.08.03-.25.1-.34.13-.33.14-.33.13-.09.04-.24.1-.33.14-.33.13-.33.14-.1.04-.23.1-.33.14-.32.14-.33.14-.11.05-.22.1-.33.14-.32.14-.32.15-.13.05-.2.1-.33.15-.32.15-.32.14-.13.07-.19.09-.33.15-.32.15-.32.15-.14.08-.18.08-.32.16-.32.15-.32.16-.15.07-.17.09-.31.16-.32.16-.32.16-.15.08-.16.08-.32.16-.32.17-.31.17-.17.08-.14.08-.32.17-.31.17-.31.17-.18.09-.13.07-.31.17-.31.17-.32.18-.18.1-.13.07-.3.18-.31.17-.31.17-.2.11-.1.07-.31.18-.31.17-.3.18-.21.13-.1.05-.3.19-.31.18-.3.18-.21.13-.09.05-.3.19-.31.19-.3.18-.22.14-.08.05-.3.19-.3.19v-9.47h-67.98v26.89h-24.32v-26.89zM203 192.43c9.48 3.69 15.67 12.15 16.1 22.34.43 10.11-5.17 19.19-14.26 23.55-9.14 4.38-20.09 2.54-27.56-4.21-7.4-6.88-9.94-17.67-6.39-27.13 1.78-4.57 4.68-8.39 8.34-11.15 6.76-5.08 15.89-6.35 23.77-3.4zm-8.75 163.28c12.56 0 22.71 10.17 22.71 22.7 0 12.55-10.18 22.7-22.71 22.7-12.55 0-22.7-10.17-22.7-22.7s10.15-22.7 22.7-22.7zm119.64 55.2 13.97 13.2 33.02-34.13c2.74-2.78 4.46-5.01 7.83-1.53l10.95 11.21c3.59 3.56 3.42 5.65.02 8.96l-45.56 45.49c-7.16 7-5.91 7.43-13.16.24l-25.5-25.36c-1.51-1.63-1.36-3.29.3-4.92l12.71-13.18c1.92-2.03 3.46-1.85 5.42.02z"/></svg>
                        </div>
                        <div class="font-bold md:text-[24px] text-[20px] md:mt-5 mt-4">
                            95+
                        </div>
                        <div class="text-gray-800 mt-0.5 relative font-medium max-md:text-[15px]">
                            Project Complete
                        </div>
                    </div>
                </div>
                <div class="bg-white p-2 shadow-sm rounded-lg group animatecard">
                    <div class="border-gray-300 border text-center border-dashed lg:p-8 md:p-6 p-4 rounded-lg relative before:content-[''] before:w-[95%] before:h-full before:top-0 before:left-0 before:bg-[url(../assets/img/counter-bg-3.png)] before:absolute before:-z-0 before:scale-0 before:transition-all before:duration-500 before:ease-in-out group-hover:before:scale-100">
                        <div class="flex items-center transition-all ease-in-out duration-300 group-hover:bg-theme2 justify-center rounded-xl lg:size-[80px] md:size-[70px] size-[60px] mx-auto bg-gray-900 relative">
                            <svg id="Layer_1" fill="#fff" class="transition-all md:h-[40px] h-[30px] ease-in-out group-hover:animate-bounceIn" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 95.78"><defs><style>.cls-1{fill-rule:evenodd;}</style></defs><title>satisfaction</title><path class="cls-1" d="M61.44,0l3.18,7.77L73,8.39l-6.4,5.43,2,8.15-7.13-4.42L54.31,22l2-8.15L49.89,8.39l8.37-.62L61.44,0Zm-6.5,46.36A25.13,25.13,0,1,1,37.17,77.14,25.13,25.13,0,0,1,54.94,46.36ZM27.28,59.83a2.68,2.68,0,0,1-5.09-1.71,41.42,41.42,0,0,1,78.48-.06,2.69,2.69,0,0,1-5.09,1.73,36.05,36.05,0,0,0-68.3,0ZM55,58.71c1.76,0,3.19,2.06,3.19,4.61S56.79,67.93,55,67.93s-3.18-2.07-3.18-4.61,1.42-4.61,3.18-4.61ZM47.88,74.47a16.63,16.63,0,0,0,3.62,3.45A17.48,17.48,0,0,0,61.71,81a16.55,16.55,0,0,0,9.87-3.33,14.43,14.43,0,0,0,3.07-3.21.09.09,0,0,1,.12,0l1,1a.09.09,0,0,1,0,.12A18.68,18.68,0,0,1,70,81.74a15.39,15.39,0,0,1-8.21,2.61,16,16,0,0,1-8.46-2.27A20.63,20.63,0,0,1,46.7,75.6a.09.09,0,0,1,0-.12l1-1a.1.1,0,0,1,.13,0Zm20-15.76c1.76,0,3.18,2.06,3.18,4.61s-1.42,4.61-3.18,4.61-3.19-2.07-3.19-4.61,1.43-4.61,3.19-4.61Zm55-23.43-5.14,6.63,3.65,7.57-7.9-2.84-6.07,5.81.26-8.39-7.39-4,8.06-2.34,1.49-8.27,4.72,6.93,8.32-1.12ZM96.78,9.17l-1.13,8.32,6.94,4.73-8.26,1.49L92,31.77l-4-7.4-8.4.26,5.81-6.06-2.84-7.91,7.56,3.65,6.64-5.14ZM0,35.28l8.32,1.13L13,29.47l1.5,8.26,8.06,2.35-7.4,4,.26,8.39L9.4,46.63,1.49,49.48l3.65-7.56L0,35.28ZM26.1,9.17l6.64,5.14,7.56-3.65-2.83,7.9,5.81,6.07-8.4-.26-4,7.4-2.35-8.06-8.27-1.49,6.94-4.73L26.1,9.17Z"/></svg>
                        </div>
                        <div class="font-bold md:text-[24px] text-[20px] md:mt-5 mt-4">
                            99% 
                        </div>
                        <div class="text-gray-800 mt-0.5 relative font-medium max-md:text-[15px]">
                        Positive Feedback
                        </div>
                    </div>
                </div>
                <div class="bg-white p-2 shadow-sm rounded-lg group animatecard">
                    <div class="border-gray-300 border text-center border-dashed lg:p-8 md:p-6 p-4 rounded-lg relative before:content-[''] before:w-[95%] before:h-full before:top-0 before:left-0 before:bg-[url(../assets/img/counter-bg-3.png)] before:absolute before:-z-0 before:scale-0 before:transition-all before:duration-500 before:ease-in-out group-hover:before:scale-100">
                        <div class="flex items-center transition-all ease-in-out duration-300 group-hover:bg-theme2 justify-center rounded-xl lg:size-[80px] md:size-[70px] size-[60px] mx-auto bg-gray-900 relative">
                            <svg fill="#fff" class="transition-all md:h-[40px] h-[30px] ease-in-out group-hover:animate-bounceIn" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 121.28" style="enable-background:new 0 0 122.88 121.28" xml:space="preserve"><g><path d="M98.42,98.8c-0.25-0.61-0.39-1.28-0.39-1.98s0.14-1.37,0.39-1.98c0.26-0.61,0.63-1.17,1.09-1.63l0.03-0.04 c0.26-0.26,0.56-0.51,0.88-0.7c0.17-0.11,0.35-0.21,0.55-0.3v-8.22h-8.51c-0.26,1.8-1.12,3.42-2.36,4.67 c-1.55,1.55-3.7,2.51-6.07,2.51H78.9v22.42h15.05c0.08-0.13,0.16-0.26,0.25-0.39c0.18-0.26,0.38-0.5,0.6-0.72 c0.47-0.47,1.04-0.86,1.68-1.12c0.61-0.25,1.28-0.39,1.98-0.39c0.69,0,1.37,0.14,1.98,0.39c0.64,0.26,1.2,0.65,1.68,1.12 c0.47,0.47,0.86,1.04,1.12,1.68c0.25,0.61,0.39,1.28,0.39,1.98c0,0.69-0.14,1.35-0.39,1.98c-0.26,0.64-0.65,1.21-1.12,1.68 s-1.04,0.86-1.68,1.12c-0.61,0.25-1.28,0.39-1.98,0.39c-0.68,0-1.33-0.13-1.94-0.38l-0.04-0.01c-0.64-0.26-1.2-0.65-1.68-1.12 c-0.29-0.29-0.55-0.63-0.77-0.98c-0.12-0.2-0.23-0.42-0.32-0.63H76.6c-0.64,0-1.21-0.26-1.63-0.68c-0.43-0.43-0.69-1-0.69-1.64l0,0 V91.13H63.08v20.34c0.17,0.09,0.34,0.18,0.51,0.29c0.31,0.19,0.6,0.43,0.85,0.68c0.48,0.48,0.86,1.04,1.12,1.68 c0.25,0.61,0.39,1.28,0.39,1.98c0,0.68-0.13,1.33-0.38,1.94l-0.01,0.04c-0.26,0.64-0.65,1.2-1.12,1.68 c-0.47,0.47-1.04,0.86-1.68,1.12c-0.61,0.25-1.28,0.39-1.98,0.39c-0.69,0-1.36-0.14-1.98-0.39c-0.64-0.26-1.21-0.65-1.68-1.12 c-0.47-0.47-0.86-1.04-1.12-1.68c-0.25-0.61-0.39-1.28-0.39-1.98c0-0.68,0.13-1.33,0.38-1.94l0.01-0.04 c0.26-0.64,0.65-1.2,1.12-1.68c0.25-0.25,0.52-0.47,0.82-0.66l0.04-0.03c0.16-0.09,0.33-0.18,0.5-0.27l0,0V91.13H43.54v10.54 c0,0.64-0.26,1.21-0.68,1.63s-0.99,0.68-1.63,0.68H30.63c-0.08,0.16-0.17,0.31-0.27,0.47c-0.18,0.27-0.39,0.53-0.63,0.77 l-0.04,0.04c-0.47,0.47-1.04,0.86-1.68,1.12c-0.61,0.25-1.28,0.39-1.98,0.39c-0.68,0-1.33-0.13-1.94-0.38l-0.04-0.01 c-0.64-0.26-1.2-0.65-1.68-1.12c-0.47-0.47-0.86-1.04-1.12-1.68c-0.25-0.61-0.39-1.28-0.39-1.98c0-0.69,0.14-1.36,0.39-1.98 c0.26-0.64,0.65-1.21,1.12-1.68c0.49-0.46,1.07-0.85,1.71-1.11l0,0c0.61-0.25,1.28-0.39,1.98-0.39c0.7,0,1.37,0.14,1.98,0.39 c0.61,0.26,1.17,0.63,1.63,1.1l0.04,0.03c0.26,0.26,0.51,0.56,0.7,0.88c0.1,0.17,0.21,0.35,0.3,0.55h8.22v-8.45 c-1.63-0.36-3.09-1.18-4.22-2.31c-1.51-1.51-2.44-3.57-2.44-5.83v-5.49H7.73v15.05c0.13,0.08,0.26,0.16,0.39,0.25 c0.26,0.18,0.49,0.38,0.72,0.6c0.47,0.47,0.86,1.04,1.12,1.68c0.25,0.61,0.39,1.28,0.39,1.98c0,0.69-0.14,1.37-0.39,1.98 c-0.26,0.64-0.65,1.2-1.12,1.68c-0.47,0.47-1.04,0.86-1.68,1.12c-0.61,0.25-1.28,0.39-1.98,0.39c-0.69,0-1.35-0.14-1.98-0.39 c-0.64-0.26-1.21-0.65-1.68-1.12c-0.47-0.47-0.86-1.04-1.12-1.68C0.14,98.22,0,97.55,0,96.85c0-0.68,0.13-1.33,0.38-1.94l0.01-0.04 c0.26-0.64,0.65-1.2,1.12-1.68c0.29-0.29,0.63-0.55,0.98-0.77c0.19-0.12,0.42-0.23,0.63-0.32V75c0-0.64,0.26-1.21,0.68-1.63 c0.43-0.43,1-0.69,1.64-0.69l0,0h26.83v-11.2H9.81c-0.09,0.17-0.18,0.34-0.29,0.51c-0.19,0.31-0.43,0.6-0.68,0.85 c-0.48,0.48-1.04,0.86-1.68,1.12c-0.61,0.25-1.28,0.39-1.98,0.39c-0.68,0-1.33-0.13-1.94-0.38l-0.04-0.01 c-0.64-0.26-1.2-0.65-1.68-1.12c-0.47-0.47-0.86-1.04-1.12-1.68c-0.25-0.61-0.39-1.28-0.39-1.98c0-0.69,0.14-1.36,0.39-1.98 c0.26-0.64,0.65-1.21,1.12-1.68s1.04-0.86,1.68-1.12C3.82,54.14,4.48,54,5.19,54c0.68,0,1.33,0.13,1.94,0.38l0.04,0.01 c0.64,0.26,1.2,0.65,1.68,1.12c0.25,0.25,0.47,0.52,0.67,0.82l0.03,0.04c0.09,0.16,0.18,0.33,0.27,0.5l0,0h22.45V42.96 c0-0.34,0.02-0.68,0.06-1.02H19.61c-0.64,0-1.21-0.26-1.63-0.68c-0.42-0.42-0.68-0.99-0.68-1.63V29.03 c-0.16-0.08-0.31-0.17-0.47-0.27c-0.27-0.18-0.53-0.39-0.77-0.63l-0.04-0.04c-0.47-0.47-0.86-1.04-1.12-1.68 c-0.25-0.61-0.39-1.28-0.39-1.98c0-0.68,0.13-1.33,0.38-1.94l0.01-0.04c0.26-0.64,0.65-1.2,1.12-1.68 c0.47-0.47,1.04-0.86,1.68-1.12c0.61-0.25,1.28-0.39,1.98-0.39c0.69,0,1.36,0.14,1.98,0.39c0.64,0.26,1.21,0.65,1.68,1.12 c0.46,0.49,0.85,1.07,1.11,1.71l0,0c0.25,0.61,0.39,1.28,0.39,1.98c0,0.7-0.14,1.37-0.39,1.98c-0.26,0.61-0.63,1.17-1.09,1.63 l-0.03,0.04c-0.26,0.26-0.56,0.51-0.89,0.7c-0.17,0.1-0.35,0.21-0.55,0.3v8.22h12.55v0.06c0.08-0.09,0.17-0.18,0.25-0.26 c1.55-1.55,3.7-2.51,6.07-2.51h4.81V7.73H30.54c-0.08,0.13-0.16,0.26-0.25,0.39c-0.18,0.26-0.38,0.49-0.6,0.72 c-0.47,0.47-1.04,0.86-1.68,1.12c-0.61,0.25-1.28,0.39-1.98,0.39c-0.69,0-1.37-0.14-1.98-0.39c-0.64-0.26-1.2-0.65-1.68-1.12 c-0.47-0.47-0.86-1.04-1.12-1.68C21,6.54,20.86,5.88,20.86,5.17c0-0.69,0.14-1.35,0.39-1.98c0.26-0.64,0.65-1.21,1.12-1.68 c0.47-0.47,1.04-0.86,1.68-1.12C24.66,0.14,25.33,0,26.03,0c0.68,0,1.33,0.13,1.94,0.38l0.04,0.01c0.64,0.26,1.2,0.65,1.68,1.12 c0.29,0.29,0.55,0.63,0.77,0.98c0.12,0.19,0.23,0.42,0.33,0.63h17.09c0.64,0,1.21,0.26,1.63,0.68c0.43,0.43,0.69,1,0.69,1.64l0,0 v29.18h11.2V9.81c-0.17-0.09-0.34-0.18-0.51-0.29c-0.31-0.19-0.6-0.43-0.85-0.68c-0.48-0.48-0.86-1.04-1.12-1.68 c-0.25-0.61-0.39-1.28-0.39-1.98c0-0.68,0.13-1.33,0.38-1.94l0.01-0.04c0.26-0.64,0.65-1.2,1.12-1.68 c0.47-0.47,1.04-0.86,1.68-1.12c0.61-0.25,1.28-0.39,1.98-0.39c0.69,0,1.36,0.14,1.98,0.39c0.64,0.26,1.21,0.65,1.68,1.12 c0.47,0.47,0.86,1.04,1.12,1.68c0.25,0.61,0.39,1.28,0.39,1.98c0,0.68-0.13,1.33-0.38,1.94l-0.01,0.04 c-0.26,0.64-0.65,1.2-1.12,1.68c-0.25,0.25-0.52,0.47-0.82,0.67l-0.04,0.03c-0.16,0.09-0.33,0.18-0.5,0.27l0,0v24.8h14.93v-15 c0-0.64,0.26-1.21,0.68-1.63c0.42-0.42,0.99-0.68,1.63-0.68h10.61c0.08-0.16,0.17-0.31,0.27-0.47c0.18-0.27,0.39-0.53,0.63-0.77 l0.04-0.04c0.47-0.47,1.04-0.86,1.68-1.12c0.61-0.25,1.28-0.39,1.98-0.39c0.68,0,1.33,0.13,1.94,0.38l0.04,0.01 c0.64,0.26,1.2,0.65,1.68,1.12c0.47,0.47,0.86,1.04,1.12,1.68c0.25,0.61,0.39,1.28,0.39,1.98c0,0.69-0.14,1.36-0.39,1.98 c-0.26,0.64-0.65,1.21-1.12,1.68c-0.5,0.46-1.07,0.85-1.71,1.11l0,0c-0.61,0.25-1.28,0.39-1.98,0.39s-1.37-0.14-1.98-0.39 c-0.61-0.26-1.17-0.63-1.63-1.09l-0.04-0.03c-0.26-0.26-0.51-0.56-0.7-0.88c-0.11-0.17-0.21-0.35-0.3-0.55h-8.22v12.84 c1.77,0.31,3.35,1.17,4.56,2.38c1.51,1.51,2.44,3.57,2.44,5.83v1.03h22.6V28.93c-0.13-0.08-0.26-0.16-0.39-0.25 c-0.26-0.18-0.49-0.38-0.71-0.6c-0.47-0.47-0.86-1.04-1.12-1.68c-0.25-0.61-0.39-1.28-0.39-1.98c0-0.69,0.14-1.37,0.39-1.98 c0.26-0.64,0.65-1.2,1.12-1.68c0.47-0.47,1.04-0.86,1.68-1.12c0.61-0.25,1.28-0.39,1.98-0.39c0.69,0,1.36,0.14,1.98,0.39 c0.64,0.26,1.21,0.65,1.68,1.12c0.47,0.47,0.86,1.04,1.12,1.68c0.25,0.61,0.39,1.28,0.39,1.98c0,0.68-0.13,1.33-0.38,1.94 l-0.01,0.04c-0.26,0.64-0.65,1.2-1.12,1.68c-0.29,0.29-0.63,0.55-0.98,0.77c-0.2,0.12-0.42,0.23-0.63,0.33v17.09 c0,0.64-0.26,1.21-0.68,1.63c-0.43,0.43-1,0.69-1.64,0.69l0,0H92.55v11.2h20.52c0.09-0.17,0.18-0.34,0.29-0.51 c0.2-0.31,0.43-0.6,0.68-0.85c0.48-0.48,1.04-0.86,1.68-1.12c0.61-0.25,1.28-0.39,1.98-0.39c0.68,0,1.33,0.13,1.94,0.38l0.04,0.01 c0.64,0.26,1.2,0.65,1.68,1.12c0.47,0.47,0.86,1.04,1.12,1.68c0.25,0.61,0.39,1.28,0.39,1.98c0,0.69-0.14,1.36-0.39,1.98 c-0.26,0.64-0.65,1.21-1.12,1.68s-1.04,0.86-1.68,1.12c-0.61,0.25-1.28,0.39-1.98,0.39c-0.68,0-1.33-0.13-1.94-0.38l-0.04-0.01 c-0.64-0.26-1.2-0.65-1.68-1.12c-0.25-0.25-0.47-0.52-0.67-0.82l-0.03-0.04c-0.09-0.16-0.18-0.33-0.27-0.5l0,0H92.55v14.93h10.72 c0.64,0,1.21,0.26,1.63,0.68c0.42,0.42,0.68,0.99,0.68,1.63v10.61c0.16,0.08,0.31,0.17,0.47,0.28c0.27,0.18,0.53,0.39,0.77,0.63 l0.04,0.04c0.47,0.47,0.86,1.04,1.12,1.68c0.25,0.61,0.39,1.28,0.39,1.98c0,0.68-0.13,1.33-0.38,1.94l-0.01,0.04 c-0.26,0.64-0.65,1.2-1.12,1.68c-0.47,0.47-1.04,0.86-1.68,1.12c-0.61,0.25-1.28,0.39-1.98,0.39c-0.69,0-1.36-0.14-1.98-0.39 c-0.64-0.26-1.21-0.65-1.68-1.12C99.08,100.02,98.68,99.44,98.42,98.8L98.42,98.8L98.42,98.8z M53.49,52.14h17.84 c1.39,0,2.52,1.13,2.52,2.52v16.43c0,1.39-1.13,2.52-2.52,2.52H53.49c-1.39,0-2.52-1.13-2.52-2.52V54.66 C50.97,53.27,52.1,52.14,53.49,52.14L53.49,52.14z M84.04,39.08H40.77c-0.99,0-1.9,0.41-2.56,1.08c-0.71,0.71-1.15,1.7-1.15,2.8 v39.83c0,1.1,0.44,2.09,1.15,2.8c0.67,0.67,1.57,1.08,2.56,1.08h43.27c0.99,0,1.9-0.41,2.56-1.08c0.71-0.71,1.15-1.7,1.15-2.8 V42.96c0-1.1-0.44-2.09-1.15-2.8C85.94,39.49,85.03,39.08,84.04,39.08L84.04,39.08z"/></g></svg>
                        </div>
                        <div class="font-bold md:text-[24px] text-[20px] md:mt-5 mt-4">
                            15+
                        </div>
                        <div class="text-gray-800 mt-0.5 relative font-medium max-md:text-[15px]">
                            Technologies Mastered
                        </div>
                    </div>
                </div>
                <div class="bg-white p-2 shadow-sm rounded-lg group animatecard">
                    <div class="border-gray-300 border text-center border-dashed lg:p-8 md:p-6 p-4 rounded-lg relative before:content-[''] before:w-[95%] before:h-full before:top-0 before:left-0 before:bg-[url(../assets/img/counter-bg-3.png)] before:absolute before:-z-0 before:scale-0 before:transition-all before:duration-500 before:ease-in-out group-hover:before:scale-100">
                        <div class="flex items-center transition-all ease-in-out duration-300 group-hover:bg-theme2 justify-center rounded-xl lg:size-[80px] md:size-[70px] size-[60px] mx-auto bg-gray-900 relative">
                            <svg fill="#fff" class="transition-all md:h-[40px] h-[30px] ease-in-out group-hover:animate-bounceIn" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 116.65" style="enable-background:new 0 0 122.88 116.65" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g><path class="st0" d="M31.51,106.42V76.94h13.26c5.62,1.01,11.24,4.06,16.86,7.59h10.3c4.66,0.28,7.1,5,2.57,8.11 c-3.61,2.65-8.37,2.5-13.26,2.06c-3.37-0.17-3.51,4.36,0,4.37c1.22,0.1,2.55-0.19,3.7-0.19c6.09-0.01,11.11-1.17,14.19-5.99 l1.54-3.6l15.32-7.59c7.66-2.52,13.12,5.49,7.46,11.07c-11.1,8.07-22.47,14.71-34.11,20.08c-8.45,5.14-16.91,4.96-25.35,0 L31.51,106.42L31.51,106.42L31.51,106.42z M77.89,0c1.92,0,3.66,0.78,4.92,2.04c1.26,1.26,2.04,3,2.04,4.92 c0,0.81-0.14,1.59-0.4,2.31c-0.15,0.43-0.34,0.83-0.57,1.22c1.63,0.24,3.25,0.59,4.85,1.04c1.9,0.53,3.76,1.2,5.56,2.01l0.03,0.02 c7.01,3.16,13.2,8.43,17.49,15.82c3.84,6.61,6.15,14.91,6.16,24.89c0,0.55-0.22,1.05-0.59,1.42l0,0c-0.34,0.34-0.8,0.56-1.3,0.59 l-0.11,0.01l-76.14,0c-0.56,0-1.06-0.22-1.43-0.59l-0.04-0.04c-0.34-0.36-0.55-0.85-0.55-1.39c0-0.06,0-0.11,0.01-0.19 c0.03-9.92,2.35-18.17,6.18-24.74c4.3-7.38,10.49-12.64,17.49-15.79c1.8-0.81,3.66-1.48,5.56-2.01c1.6-0.45,3.22-0.79,4.85-1.04 c-0.23-0.38-0.42-0.79-0.57-1.22c-0.26-0.73-0.4-1.51-0.4-2.31c0.01-1.92,0.79-3.66,2.04-4.92C74.23,0.78,75.97,0,77.89,0L77.89,0z M32.63,66.48V62.3c0-0.33,0.27-0.6,0.6-0.6h89.06c0.33,0,0.6,0.27,0.6,0.6v4.18c0,0.33-0.27,0.6-0.6,0.6H33.22 C32.89,67.08,32.63,66.81,32.63,66.48L32.63,66.48z M41.86,52.24h72.05c-0.3-8.51-2.44-15.59-5.83-21.24 c-3.85-6.43-9.3-11.03-15.44-13.79l-0.03-0.01c-2.3-1.03-4.7-1.81-7.15-2.33c-2.49-0.53-5.03-0.79-7.58-0.79 c-5.06,0-10.11,1.04-14.76,3.13C56.99,19.96,51.54,24.56,47.69,31C44.31,36.65,42.16,43.74,41.86,52.24L41.86,52.24z M53.19,43.19 c-0.17,0.51-0.53,0.92-0.97,1.15c-0.45,0.24-1,0.31-1.53,0.14c-0.53-0.16-0.95-0.53-1.19-0.98c-0.24-0.45-0.31-1-0.14-1.53 c0.72-2.31,1.65-4.43,2.78-6.35c1.13-1.93,2.46-3.66,3.98-5.21c1.51-1.54,3.21-2.89,5.07-4.07c1.86-1.17,3.89-2.17,6.08-2.99 c0.52-0.2,1.07-0.16,1.54,0.05c0.47,0.21,0.86,0.6,1.06,1.12l0.01,0.04c0.18,0.51,0.15,1.04-0.06,1.5 c-0.21,0.47-0.6,0.86-1.12,1.06l-0.03,0.01c-1.92,0.73-3.69,1.59-5.3,2.6c-1.61,1.01-3.08,2.18-4.38,3.5 c-1.29,1.32-2.42,2.79-3.39,4.44c-0.97,1.65-1.77,3.48-2.4,5.49L53.19,43.19L53.19,43.19z M0,74.11h27.52v35.27H0V74.11L0,74.11z"/></g></svg>
                        </div>
                        <div class="font-bold md:text-[24px] text-[20px] md:mt-5 mt-4">
                            15+
                        </div>
                        <div class="text-gray-800 mt-0.5 relative font-medium max-md:text-[15px]">
                            Industries Catered
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>
    <!-- ***** counter section end ***** -->

    <!-- ***** cta section start ***** -->
    <section class="md:mt-14 sm:mt-12 mt-10 md:mb-32 mb-24">
        <div class="container xl:px-[18px] md:px-4 px-3.5 mx-auto">
            <div class="bg-[#1C1C1C] lg:py-16 md:py-14 py-10 lg:px-8 md:px-6 px-4 rounded-2xl relative">
                <img src="{{asset('assets/img/bg-shape-11.svg')}}" alt="need any further assitance" class="absolute left-0 top-0">
                <div class="text-center relative">
                    <div class="flex justify-center">
                        <span class="border-2 size-[45px] border-[#1C1C1C] rounded-full"><img src="{{asset('assets/img/small-img-1.png')}}" alt="user" class="size-full"></span>
                        <span class="-ml-3 border-2 size-[45px] border-[#1C1C1C] rounded-full"><img src="{{asset('assets/img/small-img-2.png')}}" alt="user" class="size-full"></span>
                        <span class="-ml-3 border-2 size-[45px] border-[#1C1C1C] rounded-full"><img src="{{asset('assets/img/small-img-3.png')}}" alt="user" class="size-full"></span>
                        <span class="-ml-3 border-2 size-[45px] border-[#1C1C1C] rounded-full"><img src="{{asset('assets/img/small-img-4.png')}}" alt="user" class="size-full"></span>
                    </div>
                    <div class="md:text-2xl text-xl text-white font-semibold md:mt-7 mt-5">
                        Need any further assitance?
                    </div>
                    <div class="text-gray-300 max-sm:text-[14px] md:mt-3 mt-2">
                        Feel free to reach out for any inquiries or assistance.
                    </div>
                    <div class="flex items-center justify-center md:mt-7 mt-5">
                        <a href="{{ route('web.contact-us') }}" class="border-2 border-theme2 group md:text-[15px] text-[14px] text-theme2 md:py-3 py-2.5 md:px-7 px-5 rounded-[10px] font-medium relative overflow-hidden before:content=[''] before:top-0 before:left-0 before:w-[51%] before:duration-300 before:h-0 before:absolute before:bg-theme2 hover:before:h-full before:content=[''] after:bottom-0 after:right-0 after:w-[50%] after:duration-300 after:h-0 after:absolute after:bg-theme2 hover:after:h-full">
                            <span class="relative group-hover:text-white duration-300 z-10">Let's Coffee With Us</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** cta section end ***** -->
    @include('front-common.form')
@endsection
