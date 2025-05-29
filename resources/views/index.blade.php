@extends('front-layouts.main')
@section('content')
    <!-- ***** hero section ***** -->
    <section class="relative min-h-dvh sm:pt-36 pt-24 flex justify-center items-center w-full z-50">
        <div class="absolute inset-0 !h-full size-full before:absolute before:inset-0 before:bg-gradient-to-br before:from-black/50  before:to-theme1">
            <video id="home-hero-video"
                class="per-video__video fadein max-sm:w-full w-full max-sm:object-cover max-sm:h-full xl:w-full md:object-cover md:h-full"
                src="{{asset('assets/img/hero-section-bg.mov')}}" autoplay="autoplay" loop="loop"
                muted></video>
        </div>
        <div class="container xl:px-[18px] md:px-4 px-3.5 mx-auto">
            <div class="text-center relative xl:px-10 md:px-7">
                <div class="2xl:text-[70px] 3xl:text-[90px] lg:text-6xl md:text-5xl sm:text-4xl text-2xl font-bold 2xl:!leading-[95px] lg:!leading-[83px] md:!leading-[70px] sm:!leading-[55px] !leading-[34px] text-white">
                    Where Technology Meets Excellence
                    <span class="before:block relative inline-block">
                        <span class="relative text-white [-webkit-text-fill-color:transparent] lg:[-webkit-text-stroke-width:2px] [-webkit-text-stroke-width:1px] [-webkit-text-stroke-color:#eab308]">"Meets Excellence"</span>
                    </span>
                </div>
                <div class="text-white lg:w-[60%] mx-auto md:leading-[31px] leading-[26px] md:text-[16px] sm:text-[15px] text-[14px] md:mt-4 mt-3">
                    At Logicvine Infotech, we blend innovation with expertise to craft modern digital solutions tailored for your business. From responsive web design to dynamic web applications, our goal is to deliver quality-driven, scalable, and impactful results that help your brand grow and thrive in a competitive digital world.   
                </div>
                <div class="font-medium justify-center items-center md:mt-6 mt-5 w-full flex text-white text-center">
                    <label class="2xl:text-[75px] 3xl:text-[100px] lg:text-7xl sm:text-6xl text-5xl font-semibold">#1</label>
                    <label class="overflow-hidden flex flex-col ml-3 text-left *:text-nowrap w-max">
                        <label class="font-bold text-xl mb-0 h-7 sm:h-9 2xl:h-11 group relative w-full flex flex-col group/rotateWord">
                            <span class="absolute w-full opacity-0 overflow-hidden sm:text-xl 2xl:text-3xl 3xl:text-4xl text-base text-red-500 animate-rotate-word [animation-delay:0s]">Web Development</span>
                            <span class="absolute w-full opacity-0 overflow-hidden sm:text-xl 2xl:text-3xl 3xl:text-4xl text-base text-blue-500 animate-rotate-word [animation-delay:3s]">Bespoke Software</span>
                            <span class="absolute w-full opacity-0 overflow-hidden sm:text-xl 2xl:text-3xl 3xl:text-4xl text-base text-theme2 animate-rotate-word [animation-delay:6s]">Mobile App</span>
                            <span class="absolute w-full opacity-0 overflow-hidden sm:text-xl 2xl:text-3xl 3xl:text-4xl text-base text-green-500 animate-rotate-word [animation-delay:9s]">Fantasy Sports App</span>
                            <span class="absolute w-full opacity-0 overflow-hidden sm:text-xl 2xl:text-3xl 3xl:text-4xl text-base text-purple-600 animate-rotate-word [animation-delay:12s]">eCommerce Development</span>
                        </label>
                        <label class="mb-0 font-normal sm:text-xl 2xl:text-2xl 3xl:text-3xl text-base">Development company in 2024</label>
                    </label>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** hero section end *****  -->

    <!-- ***** about section ***** -->
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

    <!-- ***** service section start ***** -->
    <section id="services" class="overflow-hidden md:mt-14 sm:mt-12 mt-10 pb-1">
        <div class="container xl:px-[18px] md:px-4 px-3.5 mx-auto">
            <div class=" text-center">
                <div>
                    <h2 class="text-black lg:text-[38px] md:text-[32px] sm:text-[26px] text-[22px] lg:leading-[50px] font-semibold">Our Expert <span class="text-theme2"> Solutions</span></h2>
                    <div class="relative bg-theme2 md:h-[6px] h-[5px] md:w-[100px] w-[90px] mx-auto rounded-[30px] md:mt-2 mt-[5px]">
                        <div class="absolute left-0 top-[-1.9px] bg-white h-[10px] w-[10px] rounded-full animate-bounce-custom"></div>
                    </div>
                </div>
                <div class="md:text-xl hidden text-base font-medium text-balance mt-5 text-white">
                    At Logic Vine Infotech, we provide a comprehensive range of innovative digital services designed to
                    elevate
                    your
                    business. From custom software and mobile app development to cutting-edge eCommerce and fantasy sports
                    platforms, our expert team delivers tailored solutions that drive growth, enhance user experiences, and
                    ensure
                    your success in the digital landscape. Let us bring your vision to life with our expertise and
                    dedication to
                    excellence.
                </div>
            </div>
            <!-- radio start -->
            <div class="group md:mt-16 sm:mt-10 mt-4 bg-white rounded-xl">
                <div class="flex items-center justify-center gap-4 *:text-nowrap ">
                    <ul class="flex items-center md:justify-center md:gap-5 gap-3 max-md:pt-[32px] max-md:pb-[10px] rounded-md w-fit max-md:overflow-x-auto">
                        <li>
                            <label for="webDevelopment" class="flex items-center flex-col bg-gray-100 leading-[23px] border gap-3 w-32 sm:w-40 justify-center text-[14px] sm:text-[14px] cursor-pointer duration-300 transition-all px-2 sm:px-3 pb-2 sm:pb-3 backdrop-blur-sm text-black rounded-[10px] h-[102px] whitespace-normal text-center group-has-[.insights:checked]:bg-theme2 group-has-[.insights:checked]:text-white group-has-[.insights:checked]:translate-y-[10px] font-medium group-has-[.insights:checked]:border-theme2">
                                <span class="bg-white border md:-mt-[50px] -mt-[40px] shadow-md rounded-full md:size-[60px] sm:size-[55px] size-[50px] flex items-center justify-center p-3">
                                    <img src="{{asset('assets/img/web-development-icon.svg')}}" alt="web-development" class="h-full w-full">
                                </span>
                                Web Development
                            </label>
                        </li>
                        <li>
                            <label for="mobileappdevelopment" class="flex items-center flex-col bg-gray-100 leading-[23px] border gap-3 w-32 sm:w-40 justify-center text-[14px] sm:text-[14px] cursor-pointer duration-300 transition-all px-2 sm:px-3 pb-2 sm:pb-3 backdrop-blur-sm text-black rounded-[10px] h-[102px] whitespace-normal text-center group-has-[.mobileappdevelopment:checked]:bg-theme2 group-has-[.mobileappdevelopment:checked]:text-white group-has-[.mobileappdevelopment:checked]:translate-y-[10px] font-medium group-has-[.mobileappdevelopment:checked]:border-theme2">
                                <span class="bg-white border md:-mt-[50px] -mt-[40px] shadow-md rounded-full md:size-[60px] sm:size-[55px] size-[50px] flex items-center justify-center p-3">
                                    <img src="{{asset('assets/img/mobile-app-development-icon.svg')}}" alt="web-development" class="h-full w-full">
                                </span>
                                Mobile App Development
                            </label>
                        </li>
                        <li>
                            <label for="bespokeSoftware" class="flex items-center flex-col bg-gray-100 leading-[23px] border gap-3 w-32 sm:w-40 justify-center text-[14px] sm:text-[14px] cursor-pointer duration-300 transition-all px-2 sm:px-3 pb-2 sm:pb-3 backdrop-blur-sm text-black rounded-[10px] h-[102px] whitespace-normal text-center group-has-[.insights1:checked]:bg-theme2 group-has-[.insights1:checked]:text-white group-has-[.insights1:checked]:translate-y-[10px] font-medium group-has-[.insights1:checked]:border-theme2">
                                <span class="bg-white border md:-mt-[50px] -mt-[40px] shadow-md rounded-full md:size-[60px] sm:size-[55px] size-[50px] flex items-center justify-center p-3">
                                    <img src="{{asset('assets/img/software-development-icon.svg')}}" alt="software-development-icon" class="h-full w-full">
                                </span>
                                Software Development
                            </label>
                        </li>
                        <li>
                            <label for="eCommerce" class="flex items-center flex-col bg-gray-100 leading-[23px] border gap-3 w-32 sm:w-40 justify-center text-[14px] sm:text-[14px] cursor-pointer duration-300 transition-all px-2 sm:px-3 pb-2 sm:pb-3 backdrop-blur-sm text-black rounded-[10px] h-[102px] whitespace-normal text-center group-has-[.eCommerce:checked]:bg-theme2 group-has-[.eCommerce:checked]:text-white group-has-[.eCommerce:checked]:translate-y-[10px] font-medium group-has-[.eCommerce:checked]:border-theme2">
                                <span class="bg-white border md:-mt-[50px] -mt-[40px] shadow-md rounded-full md:size-[60px] sm:size-[55px] size-[50px] flex items-center justify-center p-3">
                                    <img src="{{asset('assets/img/e-commerse-development-icon.svg')}}" alt="e-commerse-development-icon" class="h-full w-full">
                                </span>
                                eCommerce Development
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="bg-gray-100 border rounded-[14px] -mt-8 shadow-md overflow-hidden md:p-6 sm:p-5 p-4 md:pt-20 sm:pt-16 pt-14">
                    <div>
                        <input type="radio" name="insightsSection" id="webDevelopment" class="hidden peer/ass insights"
                        checked />
                        <div class="text-sm md:text-base md:leading-8 peer-checked/ass:relative absolute peer-checked/ass:z-[1] translate-y-60 peer-checked/ass:translate-y-0 -z-20 peer-checked/ass:opacity-100 opacity-0 inset-0 pointer-events-none peer-checked/ass:pointer-events-auto duration-500 transition-all ease-in-out">
                            <a href="#" class="text-semibold font-semibold md:text-2xl text-xl text-black">Web Development</a>
                            <div class="border border-dashed bg-white border-gray-400 md:p-3 p-2.5 rounded-[8px] md:my-4 my-3">
                                <p class="md:text-[15px] text-[14px] md:leading-[28px] leading-[26px] max-w-3xl text-gray-950 font-medium">
                                    At Logic Vine Infotech, we craft dynamic, responsive websites tailored to your business
                                    needs. Our web
                                    development solutions prioritize performance, security, and user experience, ensuring your
                                    online
                                    presence stands out in a competitive market.
                                </p>    
                                <div class="flex items-center justify-end md:mt-3 mt-2.5">
                                    <a href="{{ route('web-development') }}" class="text-[13px] font-medium bg-theme2 md:py-1.5 py-2.5 md:px-6 px-4 rounded-[7px] text-white transition-all duration-300 ease-in-out hover:bg-[#333]">
                                        <span class="">EXPLORE MORE<i class="fa-solid fa-arrow-right-long ml-3"></i></span>
                                    </a>
                                </div>
                            </div>
                            <div class="flex gap-2.5 flex-wrap max-w-6xl md:pt-3 pt-2">
                                <div class="text-[13px] transition-all ease-in-out duration-300 hover:-translate-y-2 px-4 py-1 text-white rounded-md bg-theme1 w-max backdrop-blur-sm text-nowrap">
                                    <i class="fa-regular fa-circle-check"></i>
                                    Website Design
                                </div>
                                <div class="text-[13px] transition-all ease-in-out duration-300 hover:-translate-y-2 px-4 py-1 text-white rounded-md bg-theme1 w-max backdrop-blur-sm text-nowrap">
                                    <i class="fa-regular fa-circle-check"></i>
                                    CMS Development
                                </div>
                                <div class="text-[13px] transition-all ease-in-out duration-300 hover:-translate-y-2 px-4 py-1 text-white rounded-md bg-theme1 w-max backdrop-blur-sm text-nowrap">
                                    <i class="fa-regular fa-circle-check"></i>
                                    Responsive Website Design
                                </div>
                                <div class="text-[13px] transition-all ease-in-out duration-300 hover:-translate-y-2 px-4 py-1 text-white rounded-md bg-theme1 w-max backdrop-blur-sm text-nowrap">
                                    <i class="fa-regular fa-circle-check"></i>
                                    API Development
                                </div>
                                <div class="text-[13px] transition-all ease-in-out duration-300 hover:-translate-y-2 px-4 py-1 text-white rounded-md bg-theme1 w-max backdrop-blur-sm text-nowrap">
                                    <i class="fa-regular fa-circle-check"></i>
                                    Website Redesign
                                </div>
                                <div class="text-[13px] transition-all ease-in-out duration-300 hover:-translate-y-2 px-4 py-1 text-white rounded-md bg-theme1 w-max backdrop-blur-sm text-nowrap">
                                    <i class="fa-regular fa-circle-check"></i>
                                    Web Portal Development
                                </div>
                            </div>
                            <div class="flex items-center justify-between md:mt-10 sm:mt-7 mt-6">
                                <div class="flex items-center flex-wrap overflow-hidden md:gap-9 sm:gap-6 gap-4 *:w-auto *:text-center *:gap-2 *:*:text-center">
                                    <div>
                                        <div class="md:size-10 size-8 mx-auto text-[#E96228]">
                                            <svg class="size-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z"></path>
                                            </svg>
                                        </div>
                                        <div class="sm:text-[14px] text-[13px] font-semibold mt-2">HTML5</div>
                                    </div>
                                    <div>
                                        <div class="md:size-10 size-8 mx-auto text-[#2E9FD3]">
                                            <svg class="size-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0 32l34.9 395.8L192 480l157.1-52.2L384 32H0zm313.1 80l-4.8 47.3L193 208.6l-.3.1h111.5l-12.8 146.6-98.2 28.7-98.8-29.2-6.4-73.9h48.9l3.2 38.3 52.6 13.3 54.7-15.4 3.7-61.6-166.3-.5v-.1l-.2.1-3.6-46.3L193.1 162l6.5-2.7H76.7L70.9 112h242.2z"
                                                ></path>
                                            </svg>
                                        </div>
                                        <div class="sm:text-[14px] text-[13px] font-semibold mt-2">CSS3</div>
                                    </div>
                                    <div>
                                        <div class="md:size-10 size-8 mx-auto text-[#D6002F]">
                                            <svg class="size-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M185.7 268.1h76.2l-38.1-91.6-38.1 91.6zM223.8 32L16 106.4l31.8 275.7 176 97.9 176-97.9 31.8-275.7zM354 373.8h-48.6l-26.2-65.4H168.6l-26.2 65.4H93.7L223.8 81.5z"></path>
                                            </svg>
                                        </div>
                                        <div class="sm:text-[14px] text-[13px] font-semibold mt-2">Angular JS</div>
                                    </div>
                                    <div>
                                        <div class="md:size-10 size-8 mx-auto text-[#48903E]">
                                            <svg class="size-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M316.3 452c-2.1 0-4.2-.6-6.1-1.6L291 439c-2.9-1.6-1.5-2.2-.5-2.5 3.8-1.3 4.6-1.6 8.7-4 .4-.2 1-.1 1.4.1l14.8 8.8c.5.3 1.3.3 1.8 0L375 408c.5-.3.9-.9.9-1.6v-66.7c0-.7-.3-1.3-.9-1.6l-57.8-33.3c-.5-.3-1.2-.3-1.8 0l-57.8 33.3c-.6.3-.9 1-.9 1.6v66.7c0 .6.4 1.2.9 1.5l15.8 9.1c8.6 4.3 13.9-.8 13.9-5.8v-65.9c0-.9.7-1.7 1.7-1.7h7.3c.9 0 1.7.7 1.7 1.7v65.9c0 11.5-6.2 18-17.1 18-3.3 0-6 0-13.3-3.6l-15.2-8.7c-3.7-2.2-6.1-6.2-6.1-10.5v-66.7c0-4.3 2.3-8.4 6.1-10.5l57.8-33.4c3.7-2.1 8.5-2.1 12.1 0l57.8 33.4c3.7 2.2 6.1 6.2 6.1 10.5v66.7c0 4.3-2.3 8.4-6.1 10.5l-57.8 33.4c-1.7 1.1-3.8 1.7-6 1.7zm46.7-65.8c0-12.5-8.4-15.8-26.2-18.2-18-2.4-19.8-3.6-19.8-7.8 0-3.5 1.5-8.1 14.8-8.1 11.9 0 16.3 2.6 18.1 10.6.2.8.8 1.3 1.6 1.3h7.5c.5 0 .9-.2 1.2-.5.3-.4.5-.8.4-1.3-1.2-13.8-10.3-20.2-28.8-20.2-16.5 0-26.3 7-26.3 18.6 0 12.7 9.8 16.1 25.6 17.7 18.9 1.9 20.4 4.6 20.4 8.3 0 6.5-5.2 9.2-17.4 9.2-15.3 0-18.7-3.8-19.8-11.4-.1-.8-.8-1.4-1.7-1.4h-7.5c-.9 0-1.7.7-1.7 1.7 0 9.7 5.3 21.3 30.6 21.3 18.5 0 29-7.2 29-19.8zm54.5-50.1c0 6.1-5 11.1-11.1 11.1s-11.1-5-11.1-11.1c0-6.3 5.2-11.1 11.1-11.1 6-.1 11.1 4.8 11.1 11.1zm-1.8 0c0-5.2-4.2-9.3-9.4-9.3-5.1 0-9.3 4.1-9.3 9.3 0 5.2 4.2 9.4 9.3 9.4 5.2-.1 9.4-4.3 9.4-9.4zm-4.5 6.2h-2.6c-.1-.6-.5-3.8-.5-3.9-.2-.7-.4-1.1-1.3-1.1h-2.2v5h-2.4v-12.5h4.3c1.5 0 4.4 0 4.4 3.3 0 2.3-1.5 2.8-2.4 3.1 1.7.1 1.8 1.2 2.1 2.8.1 1 .3 2.7.6 3.3zm-2.8-8.8c0-1.7-1.2-1.7-1.8-1.7h-2v3.5h1.9c1.6 0 1.9-1.1 1.9-1.8zM137.3 191c0-2.7-1.4-5.1-3.7-6.4l-61.3-35.3c-1-.6-2.2-.9-3.4-1h-.6c-1.2 0-2.3.4-3.4 1L3.7 184.6C1.4 185.9 0 188.4 0 191l.1 95c0 1.3.7 2.5 1.8 3.2 1.1.7 2.5.7 3.7 0L42 268.3c2.3-1.4 3.7-3.8 3.7-6.4v-44.4c0-2.6 1.4-5.1 3.7-6.4l15.5-8.9c1.2-.7 2.4-1 3.7-1 1.3 0 2.6.3 3.7 1l15.5 8.9c2.3 1.3 3.7 3.8 3.7 6.4v44.4c0 2.6 1.4 5.1 3.7 6.4l36.4 20.9c1.1.7 2.6.7 3.7 0 1.1-.6 1.8-1.9 1.8-3.2l.2-95zM472.5 87.3v176.4c0 2.6-1.4 5.1-3.7 6.4l-61.3 35.4c-2.3 1.3-5.1 1.3-7.4 0l-61.3-35.4c-2.3-1.3-3.7-3.8-3.7-6.4v-70.8c0-2.6 1.4-5.1 3.7-6.4l61.3-35.4c2.3-1.3 5.1-1.3 7.4 0l15.3 8.8c1.7 1 3.9-.3 3.9-2.2v-94c0-2.8 3-4.6 5.5-3.2l36.5 20.4c2.3 1.2 3.8 3.7 3.8 6.4zm-46 128.9c0-.7-.4-1.3-.9-1.6l-21-12.2c-.6-.3-1.3-.3-1.9 0l-21 12.2c-.6.3-.9.9-.9 1.6v24.3c0 .7.4 1.3.9 1.6l21 12.1c.6.3 1.3.3 1.8 0l21-12.1c.6-.3.9-.9.9-1.6v-24.3zm209.8-.7c2.3-1.3 3.7-3.8 3.7-6.4V192c0-2.6-1.4-5.1-3.7-6.4l-60.9-35.4c-2.3-1.3-5.1-1.3-7.4 0l-61.3 35.4c-2.3 1.3-3.7 3.8-3.7 6.4v70.8c0 2.7 1.4 5.1 3.7 6.4l60.9 34.7c2.2 1.3 5 1.3 7.3 0l36.8-20.5c2.5-1.4 2.5-5 0-6.4L550 241.6c-1.2-.7-1.9-1.9-1.9-3.2v-22.2c0-1.3.7-2.5 1.9-3.2l19.2-11.1c1.1-.7 2.6-.7 3.7 0l19.2 11.1c1.1.7 1.9 1.9 1.9 3.2v17.4c0 2.8 3.1 4.6 5.6 3.2l36.7-21.3zM559 219c-.4.3-.7.7-.7 1.2v13.6c0 .5.3 1 .7 1.2l11.8 6.8c.4.3 1 .3 1.4 0L584 235c.4-.3.7-.7.7-1.2v-13.6c0-.5-.3-1-.7-1.2l-11.8-6.8c-.4-.3-1-.3-1.4 0L559 219zm-254.2 43.5v-70.4c0-2.6-1.6-5.1-3.9-6.4l-61.1-35.2c-2.1-1.2-5-1.4-7.4 0l-61.1 35.2c-2.3 1.3-3.9 3.7-3.9 6.4v70.4c0 2.8 1.9 5.2 4 6.4l61.2 35.2c2.4 1.4 5.2 1.3 7.4 0l61-35.2c1.8-1 3.1-2.7 3.6-4.7.1-.5.2-1.1.2-1.7zm-74.3-124.9l-.8.5h1.1l-.3-.5zm76.2 130.2l-.4-.7v.9l.4-.2z"
                                                ></path>
                                            </svg>
                                        </div>
                                        <div class="sm:text-[14px] text-[13px] font-semibold mt-2">Node.Js</div>
                                    </div>
                                    <div>
                                        <div class="md:size-10 size-8 mx-auto text-[#F54D3A]">
                                            <svg class="size-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M504.4,115.83a5.72,5.72,0,0,0-.28-.68,8.52,8.52,0,0,0-.53-1.25,6,6,0,0,0-.54-.71,9.36,9.36,0,0,0-.72-.94c-.23-.22-.52-.4-.77-.6a8.84,8.84,0,0,0-.9-.68L404.4,55.55a8,8,0,0,0-8,0L300.12,111h0a8.07,8.07,0,0,0-.88.69,7.68,7.68,0,0,0-.78.6,8.23,8.23,0,0,0-.72.93c-.17.24-.39.45-.54.71a9.7,9.7,0,0,0-.52,1.25c-.08.23-.21.44-.28.68a8.08,8.08,0,0,0-.28,2.08V223.18l-80.22,46.19V63.44a7.8,7.8,0,0,0-.28-2.09c-.06-.24-.2-.45-.28-.68a8.35,8.35,0,0,0-.52-1.24c-.14-.26-.37-.47-.54-.72a9.36,9.36,0,0,0-.72-.94,9.46,9.46,0,0,0-.78-.6,9.8,9.8,0,0,0-.88-.68h0L115.61,1.07a8,8,0,0,0-8,0L11.34,56.49h0a6.52,6.52,0,0,0-.88.69,7.81,7.81,0,0,0-.79.6,8.15,8.15,0,0,0-.71.93c-.18.25-.4.46-.55.72a7.88,7.88,0,0,0-.51,1.24,6.46,6.46,0,0,0-.29.67,8.18,8.18,0,0,0-.28,2.1v329.7a8,8,0,0,0,4,6.95l192.5,110.84a8.83,8.83,0,0,0,1.33.54c.21.08.41.2.63.26a7.92,7.92,0,0,0,4.1,0c.2-.05.37-.16.55-.22a8.6,8.6,0,0,0,1.4-.58L404.4,400.09a8,8,0,0,0,4-6.95V287.88l92.24-53.11a8,8,0,0,0,4-7V117.92A8.63,8.63,0,0,0,504.4,115.83ZM111.6,17.28h0l80.19,46.15-80.2,46.18L31.41,63.44Zm88.25,60V278.6l-46.53,26.79-33.69,19.4V123.5l46.53-26.79Zm0,412.78L23.37,388.5V77.32L57.06,96.7l46.52,26.8V338.68a6.94,6.94,0,0,0,.12.9,8,8,0,0,0,.16,1.18h0a5.92,5.92,0,0,0,.38.9,6.38,6.38,0,0,0,.42,1v0a8.54,8.54,0,0,0,.6.78,7.62,7.62,0,0,0,.66.84l0,0c.23.22.52.38.77.58a8.93,8.93,0,0,0,.86.66l0,0,0,0,92.19,52.18Zm8-106.17-80.06-45.32,84.09-48.41,92.26-53.11,80.13,46.13-58.8,33.56Zm184.52,4.57L215.88,490.11V397.8L346.6,323.2l45.77-26.15Zm0-119.13L358.68,250l-46.53-26.79V131.79l33.69,19.4L392.37,178Zm8-105.28-80.2-46.17,80.2-46.16,80.18,46.15Zm8,105.28V178L455,151.19l33.68-19.4v91.39h0Z"
                                                ></path>
                                            </svg>
                                        </div>
                                        <div class="sm:text-[14px] text-[13px] font-semibold mt-2">Laraval</div>
                                    </div>
                                    <div>
                                        <div class="md:size-10 size-8 mx-auto text-[#F7CD3E]">
                                            <svg class="size-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M439.8 200.5c-7.7-30.9-22.3-54.2-53.4-54.2h-40.1v47.4c0 36.8-31.2 67.8-66.8 67.8H172.7c-29.2 0-53.4 25-53.4 54.3v101.8c0 29 25.2 46 53.4 54.3 33.8 9.9 66.3 11.7 106.8 0 26.9-7.8 53.4-23.5 53.4-54.3v-40.7H226.2v-13.6h160.2c31.1 0 42.6-21.7 53.4-54.2 11.2-33.5 10.7-65.7 0-108.6zM286.2 404c11.1 0 20.1 9.1 20.1 20.3 0 11.3-9 20.4-20.1 20.4-11 0-20.1-9.2-20.1-20.4.1-11.3 9.1-20.3 20.1-20.3zM167.8 248.1h106.8c29.7 0 53.4-24.5 53.4-54.3V91.9c0-29-24.4-50.7-53.4-55.6-35.8-5.9-74.7-5.6-106.8.1-45.2 8-53.4 24.7-53.4 55.6v40.7h106.9v13.6h-147c-31.1 0-58.3 18.7-66.8 54.2-9.8 40.7-10.2 66.1 0 108.6 7.6 31.6 25.7 54.2 56.8 54.2H101v-48.8c0-35.3 30.5-66.4 66.8-66.4zm-6.7-142.6c-11.1 0-20.1-9.1-20.1-20.3.1-11.3 9-20.4 20.1-20.4 11 0 20.1 9.2 20.1 20.4s-9 20.3-20.1 20.3z"
                                                ></path>
                                            </svg>
                                        </div>
                                        <div class="sm:text-[14px] text-[13px] font-semibold mt-2">Python</div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div>
                        <input type="radio" name="insightsSection" id="mobileappdevelopment" class="hidden peer/ass mobileappdevelopment" />
                        <div class="text-sm md:text-base md:leading-8 peer-checked/ass:relative absolute peer-checked/ass:z-[1] translate-y-60 peer-checked/ass:translate-y-0 -z-20 peer-checked/ass:opacity-100 opacity-0 inset-0 pointer-events-none peer-checked/ass:pointer-events-auto duration-500 transition-all ease-in-out">
                            <a href="#" class="text-semibold font-semibold md:text-2xl text-xl text-black">Mobile App Development</a>
                            <div class="border border-dashed bg-white border-gray-400 md:p-3 p-2.5 rounded-[8px] md:my-4 my-3">
                                <p class="md:text-[15px] text-[14px] md:leading-[28px] leading-[26px] max-w-3xl text-gray-950 font-medium">
                                    At Logic Vine Infotech, we build high-performance mobile apps tailored for iOS and Android platforms. Our expert team ensures seamless user experiences, robust functionality, and scalable solutions to meet your business needs.
                                    Let us bring your app idea to life!
                                </p>
                                <div class="flex items-center justify-end md:mt-3 mt-2.5">
                                    <a href="{{ route('web-development') }}" class="text-[13px] font-medium bg-theme2 md:py-1.5 py-2.5 md:px-6 px-4 rounded-[7px] text-white transition-all duration-300 ease-in-out hover:bg-[#333]">
                                        <span class="">EXPLORE MORE<i class="fa-solid fa-arrow-right-long ml-3"></i></span>
                                    </a>
                                </div>
                            </div>
                            <div class="flex gap-2.5 flex-wrap max-w-6xl md:pt-3 pt-2">
                                <div class="text-[13px] transition-all ease-in-out duration-300 hover:-translate-y-2 px-4 py-1 text-white rounded-md bg-theme1 w-max backdrop-blur-sm text-nowrap">
                                    <i class="fa-regular fa-circle-check"></i>
                                    Android App Development
                                </div>
                                <div class="text-[13px] transition-all ease-in-out duration-300 hover:-translate-y-2 px-4 py-1 text-white rounded-md bg-theme1 w-max backdrop-blur-sm text-nowrap">
                                    <i class="fa-regular fa-circle-check"></i>
                                    Cross Platform App Development
                                </div>
                                <div class="text-[13px] transition-all ease-in-out duration-300 hover:-translate-y-2 px-4 py-1 text-white rounded-md bg-theme1 w-max backdrop-blur-sm text-nowrap">
                                    <i class="fa-regular fa-circle-check"></i>
                                    iOS App Development
                                </div>
                                <div class="text-[13px] transition-all ease-in-out duration-300 hover:-translate-y-2 px-4 py-1 text-white rounded-md bg-theme1 w-max backdrop-blur-sm text-nowrap">
                                    <i class="fa-regular fa-circle-check"></i>
                                    PWA Development
                                </div>
                                <div class="text-[13px] transition-all ease-in-out duration-300 hover:-translate-y-2 px-4 py-1 text-white rounded-md bg-theme1 w-max backdrop-blur-sm text-nowrap">
                                    <i class="fa-regular fa-circle-check"></i>
                                    Flutter App Development
                                </div>
                                <div class="text-[13px] transition-all ease-in-out duration-300 hover:-translate-y-2 px-4 py-1 text-white rounded-md bg-theme1 w-max backdrop-blur-sm text-nowrap">
                                    <i class="fa-regular fa-circle-check"></i>
                                    Wearable App Development
                                </div>
                                <div class="text-[13px] transition-all ease-in-out duration-300 hover:-translate-y-2 px-4 py-1 text-white rounded-md bg-theme1 w-max backdrop-blur-sm text-nowrap">
                                    <i class="fa-regular fa-circle-check"></i>
                                    React App Development
                                </div>
                            </div>
                            <div class="flex items-center flex-wrap overflow-hidden md:mt-10 sm:mt-7 mt-6 md:gap-9 sm:gap-6 gap-4 *:w-auto *:text-center *:gap-2 *:*:text-center">
                                <div>
                                    <div class="md:size-10 size-8 mx-auto text-[#58C1F0]">
                                        <svg class="size-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.5039 2.00098L3.50391 12.001L6.58724 15.0843L19.6673 2.00098H13.5039ZM13.4985 11.1989L8.12328 16.6199L13.4956 21.9998H19.6842L14.2975 16.5999L19.6856 11.1998L13.4985 11.1989Z"></path>
                                        </svg>
                                    </div>
                                    <div class="sm:text-[14px] text-[13px] font-semibold mt-2">Flutter</div>
                                </div>
                                <div>
                                    <div class="md:size-10 size-8 mx-auto text-[#2E9FD3]">
                                        <svg class="size-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M448 156.09c0-4.51-.08-9-.2-13.52a196.31 196.31 0 0 0-2.58-29.42 99.62 99.62 0 0 0-9.22-28A94.08 94.08 0 0 0 394.84 44a99.17 99.17 0 0 0-28-9.22 195 195 0 0 0-29.43-2.59c-4.51-.12-9-.17-13.52-.2H124.14c-4.51 0-9 .08-13.52.2-2.45.07-4.91.15-7.37.27a171.68 171.68 0 0 0-22.06 2.32 103.06 103.06 0 0 0-21.21 6.1q-3.46 1.45-6.81 3.12a94.66 94.66 0 0 0-18.39 12.32c-1.88 1.61-3.69 3.28-5.43 5A93.86 93.86 0 0 0 12 85.17a99.45 99.45 0 0 0-9.22 28 196.31 196.31 0 0 0-2.54 29.4c-.13 4.51-.18 9-.21 13.52v199.83c0 4.51.08 9 .21 13.51a196.08 196.08 0 0 0 2.58 29.42 99.3 99.3 0 0 0 9.22 28A94.31 94.31 0 0 0 53.17 468a99.47 99.47 0 0 0 28 9.21 195 195 0 0 0 29.43 2.59c4.5.12 9 .17 13.52.2H323.91c4.51 0 9-.08 13.52-.2a196.59 196.59 0 0 0 29.44-2.59 99.57 99.57 0 0 0 28-9.21A94.22 94.22 0 0 0 436 426.84a99.3 99.3 0 0 0 9.22-28 194.79 194.79 0 0 0 2.59-29.42c.12-4.5.17-9 .2-13.51V172.14c-.01-5.35-.01-10.7-.01-16.05zm-69.88 241c-20-38.93-57.23-29.27-76.31-19.47-1.72 1-3.48 2-5.25 3l-.42.25c-39.5 21-92.53 22.54-145.85-.38A234.64 234.64 0 0 1 45 290.12a230.63 230.63 0 0 0 39.17 23.37c56.36 26.4 113 24.49 153 0-57-43.85-104.6-101-141.09-147.22a197.09 197.09 0 0 1-18.78-25.9c43.7 40 112.7 90.22 137.48 104.12-52.57-55.49-98.89-123.94-96.72-121.74 82.79 83.42 159.18 130.59 159.18 130.59 2.88 1.58 5 2.85 6.73 4a127.44 127.44 0 0 0 4.16-12.47c13.22-48.33-1.66-103.58-35.31-149.2C329.61 141.75 375 229.34 356.4 303.42c-.44 1.73-.95 3.4-1.44 5.09 38.52 47.4 28.04 98.17 23.13 88.59z"></path>
                                        </svg>
                                    </div>
                                    <div class="sm:text-[14px] text-[13px] font-semibold mt-2">Swift</div>
                                </div>
                                <div>
                                    <div class="md:size-10 size-8 mx-auto text-[#01D1F7]">
                                        <svg class="size-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M418.2 177.2c-5.4-1.8-10.8-3.5-16.2-5.1.9-3.7 1.7-7.4 2.5-11.1 12.3-59.6 4.2-107.5-23.1-123.3-26.3-15.1-69.2.6-112.6 38.4-4.3 3.7-8.5 7.6-12.5 11.5-2.7-2.6-5.5-5.2-8.3-7.7-45.5-40.4-91.1-57.4-118.4-41.5-26.2 15.2-34 60.3-23 116.7 1.1 5.6 2.3 11.1 3.7 16.7-6.4 1.8-12.7 3.8-18.6 5.9C38.3 196.2 0 225.4 0 255.6c0 31.2 40.8 62.5 96.3 81.5 4.5 1.5 9 3 13.6 4.3-1.5 6-2.8 11.9-4 18-10.5 55.5-2.3 99.5 23.9 114.6 27 15.6 72.4-.4 116.6-39.1 3.5-3.1 7-6.3 10.5-9.7 4.4 4.3 9 8.4 13.6 12.4 42.8 36.8 85.1 51.7 111.2 36.6 27-15.6 35.8-62.9 24.4-120.5-.9-4.4-1.9-8.9-3-13.5 3.2-.9 6.3-1.9 9.4-2.9 57.7-19.1 99.5-50 99.5-81.7 0-30.3-39.4-59.7-93.8-78.4zM282.9 92.3c37.2-32.4 71.9-45.1 87.7-36 16.9 9.7 23.4 48.9 12.8 100.4-.7 3.4-1.4 6.7-2.3 10-22.2-5-44.7-8.6-67.3-10.6-13-18.6-27.2-36.4-42.6-53.1 3.9-3.7 7.7-7.2 11.7-10.7zM167.2 307.5c5.1 8.7 10.3 17.4 15.8 25.9-15.6-1.7-31.1-4.2-46.4-7.5 4.4-14.4 9.9-29.3 16.3-44.5 4.6 8.8 9.3 17.5 14.3 26.1zm-30.3-120.3c14.4-3.2 29.7-5.8 45.6-7.8-5.3 8.3-10.5 16.8-15.4 25.4-4.9 8.5-9.7 17.2-14.2 26-6.3-14.9-11.6-29.5-16-43.6zm27.4 68.9c6.6-13.8 13.8-27.3 21.4-40.6s15.8-26.2 24.4-38.9c15-1.1 30.3-1.7 45.9-1.7s31 .6 45.9 1.7c8.5 12.6 16.6 25.5 24.3 38.7s14.9 26.7 21.7 40.4c-6.7 13.8-13.9 27.4-21.6 40.8-7.6 13.3-15.7 26.2-24.2 39-14.9 1.1-30.4 1.6-46.1 1.6s-30.9-.5-45.6-1.4c-8.7-12.7-16.9-25.7-24.6-39s-14.8-26.8-21.5-40.6zm180.6 51.2c5.1-8.8 9.9-17.7 14.6-26.7 6.4 14.5 12 29.2 16.9 44.3-15.5 3.5-31.2 6.2-47 8 5.4-8.4 10.5-17 15.5-25.6zm14.4-76.5c-4.7-8.8-9.5-17.6-14.5-26.2-4.9-8.5-10-16.9-15.3-25.2 16.1 2 31.5 4.7 45.9 8-4.6 14.8-10 29.2-16.1 43.4zM256.2 118.3c10.5 11.4 20.4 23.4 29.6 35.8-19.8-.9-39.7-.9-59.5 0 9.8-12.9 19.9-24.9 29.9-35.8zM140.2 57c16.8-9.8 54.1 4.2 93.4 39 2.5 2.2 5 4.6 7.6 7-15.5 16.7-29.8 34.5-42.9 53.1-22.6 2-45 5.5-67.2 10.4-1.3-5.1-2.4-10.3-3.5-15.5-9.4-48.4-3.2-84.9 12.6-94zm-24.5 263.6c-4.2-1.2-8.3-2.5-12.4-3.9-21.3-6.7-45.5-17.3-63-31.2-10.1-7-16.9-17.8-18.8-29.9 0-18.3 31.6-41.7 77.2-57.6 5.7-2 11.5-3.8 17.3-5.5 6.8 21.7 15 43 24.5 63.6-9.6 20.9-17.9 42.5-24.8 64.5zm116.6 98c-16.5 15.1-35.6 27.1-56.4 35.3-11.1 5.3-23.9 5.8-35.3 1.3-15.9-9.2-22.5-44.5-13.5-92 1.1-5.6 2.3-11.2 3.7-16.7 22.4 4.8 45 8.1 67.9 9.8 13.2 18.7 27.7 36.6 43.2 53.4-3.2 3.1-6.4 6.1-9.6 8.9zm24.5-24.3c-10.2-11-20.4-23.2-30.3-36.3 9.6.4 19.5.6 29.5.6 10.3 0 20.4-.2 30.4-.7-9.2 12.7-19.1 24.8-29.6 36.4zm130.7 30c-.9 12.2-6.9 23.6-16.5 31.3-15.9 9.2-49.8-2.8-86.4-34.2-4.2-3.6-8.4-7.5-12.7-11.5 15.3-16.9 29.4-34.8 42.2-53.6 22.9-1.9 45.7-5.4 68.2-10.5 1 4.1 1.9 8.2 2.7 12.2 4.9 21.6 5.7 44.1 2.5 66.3zm18.2-107.5c-2.8.9-5.6 1.8-8.5 2.6-7-21.8-15.6-43.1-25.5-63.8 9.6-20.4 17.7-41.4 24.5-62.9 5.2 1.5 10.2 3.1 15 4.7 46.6 16 79.3 39.8 79.3 58 0 19.6-34.9 44.9-84.8 61.4zm-149.7-15c25.3 0 45.8-20.5 45.8-45.8s-20.5-45.8-45.8-45.8c-25.3 0-45.8 20.5-45.8 45.8s20.5 45.8 45.8 45.8z"
                                            ></path>
                                        </svg>
                                    </div>
                                    <div class="sm:text-[14px] text-[13px] font-semibold mt-2">React Native</div>
                                </div>
                                <div>
                                    <div class="md:size-10 size-8 mx-auto text-[#C518C9]">
                                        <svg class="size-full" stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title></title>
                                            <path d="M24 24H0V0h24L12 12Z"></path>
                                        </svg>
                                    </div>
                                    <div class="sm:text-[14px] text-[13px] font-semibold mt-2">Kotlin</div>
                                </div>
                                <div>
                                    <div class="md:size-10 size-8 mx-auto text-[#75BC54]">
                                        <svg class="size-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M420.55,301.93a24,24,0,1,1,24-24,24,24,0,0,1-24,24m-265.1,0a24,24,0,1,1,24-24,24,24,0,0,1-24,24m273.7-144.48,47.94-83a10,10,0,1,0-17.27-10h0l-48.54,84.07a301.25,301.25,0,0,0-246.56,0L116.18,64.45a10,10,0,1,0-17.27,10h0l47.94,83C64.53,202.22,8.24,285.55,0,384H576c-8.24-98.45-64.54-181.78-146.85-226.55"
                                            ></path>
                                        </svg>
                                    </div>
                                    <div class="sm:text-[14px] text-[13px] font-semibold mt-2">Android</div>
                                </div>
                                <div>
                                    <div class="md:size-10 size-8 mx-auto text-[#A7B9B7]">
                                        <svg class="size-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM127 384.5c-5.5 9.6-17.8 12.8-27.3 7.3-9.6-5.5-12.8-17.8-7.3-27.3l14.3-24.7c16.1-4.9 29.3-1.1 39.6 11.4L127 384.5zm138.9-53.9H84c-11 0-20-9-20-20s9-20 20-20h51l65.4-113.2-20.5-35.4c-5.5-9.6-2.2-21.8 7.3-27.3 9.6-5.5 21.8-2.2 27.3 7.3l8.9 15.4 8.9-15.4c5.5-9.6 17.8-12.8 27.3-7.3 9.6 5.5 12.8 17.8 7.3 27.3l-85.8 148.6h62.1c20.2 0 31.5 23.7 22.7 40zm98.1 0h-29l19.6 33.9c5.5 9.6 2.2 21.8-7.3 27.3-9.6 5.5-21.8 2.2-27.3-7.3-32.9-56.9-57.5-99.7-74-128.1-16.7-29-4.8-58 7.1-67.8 13.1 22.7 32.7 56.7 58.9 102h52c11 0 20 9 20 20 0 11.1-9 20-20 20z"
                                            ></path>
                                        </svg>
                                    </div>
                                    <div class="sm:text-[14px] text-[13px] font-semibold mt-2">iOS</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <input type="radio" name="insightsSection" id="bespokeSoftware" class="hidden peer/ass insights1" />
                        <div class="text-sm md:text-base md:leading-8 peer-checked/ass:relative absolute peer-checked/ass:z-[1] translate-y-60 peer-checked/ass:translate-y-0 -z-20 peer-checked/ass:opacity-100 opacity-0 inset-0 pointer-events-none peer-checked/ass:pointer-events-auto duration-500 transition-all ease-in-out">
                            <a href="#" class="text-semibold font-semibold md:text-2xl text-xl text-black">Software Development</a>
                            <div class="border border-dashed bg-white border-gray-400 md:p-3 p-2.5 rounded-[8px] md:my-4 my-3">
                                <p class="md:text-[15px] text-[14px] md:leading-[28px] leading-[26px] max-w-3xl text-gray-950 font-medium">
                                    At Logic Vine Infotech, we provide custom software development solutions tailored to meet your specific business needs. Our expert team delivers reliable, scalable, and efficient software that drives innovation and streamlines
                                    operations.
                                </p>
                                <div class="flex items-center justify-end md:mt-3 mt-2.5">
                                    <a href="{{ route('web-development') }}" class="text-[13px] font-medium bg-theme2 md:py-1.5 py-2.5 md:px-6 px-4 rounded-[7px] text-white transition-all duration-300 ease-in-out hover:bg-[#333]">
                                        <span class="">EXPLORE MORE<i class="fa-solid fa-arrow-right-long ml-3"></i></span>
                                    </a>
                                </div>
                            </div>
                            <div class="flex gap-2.5 flex-wrap max-w-6xl md:pt-3 pt-2">
                                <div class="text-[13px] transition-all ease-in-out duration-300 hover:-translate-y-2 px-4 py-1 text-white rounded-md bg-theme1 w-max backdrop-blur-sm text-nowrap">
                                    <i class="fa-regular fa-circle-check"></i>
                                    Bespoke Software Development
                                </div>
                                <div class="text-[13px] transition-all ease-in-out duration-300 hover:-translate-y-2 px-4 py-1 text-white rounded-md bg-theme1 w-max backdrop-blur-sm text-nowrap">
                                    <i class="fa-regular fa-circle-check"></i>
                                    Saas Development
                                </div>
                                <div class="text-[13px] transition-all ease-in-out duration-300 hover:-translate-y-2 px-4 py-1 text-white rounded-md bg-theme1 w-max backdrop-blur-sm text-nowrap">
                                    <i class="fa-regular fa-circle-check"></i>
                                    White Lebal Software Development
                                </div>
                                <div class="text-[13px] transition-all ease-in-out duration-300 hover:-translate-y-2 px-4 py-1 text-white rounded-md bg-theme1 w-max backdrop-blur-sm text-nowrap">
                                    <i class="fa-regular fa-circle-check"></i>
                                    ERP Software Development
                                </div>
                            </div>
                            <div class="flex items-center flex-wrap overflow-hidden md:mt-10 sm:mt-7 mt-6 md:gap-9 sm:gap-6 gap-4 *:w-auto *:text-center *:gap-2 *:*:text-center">
                                <div>
                                    <div class="md:size-10 size-8 mx-auto text-[#EC4134]">
                                        <svg class="size-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"
                                            ></path>
                                        </svg>
                                    </div>
                                    <div class="sm:text-[14px] text-[13px] font-semibold mt-2">Java</div>
                                </div>
                                <div>
                                    <div class="md:size-10 size-8 mx-auto text-[#005697]">
                                        <svg class="size-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM5.408 5.89c-.83 0-1.318.64-1.318 1.753v.742c0 1.108.479 1.727 1.318 1.727.69 0 1.138-.435 1.187-1.05h1.147v.114c-.058 1.147-1.029 1.938-2.343 1.938-1.612 0-2.518-1.028-2.518-2.729v-.747c0-1.7.914-2.75 2.518-2.75 1.319 0 2.29.812 2.343 1.999v.11H6.595c-.049-.638-.506-1.108-1.187-1.108Zm5.404 0c-.831 0-1.319.64-1.319 1.753v.742c0 1.108.48 1.727 1.319 1.727.69 0 1.138-.435 1.186-1.05h1.147v.114c-.057 1.147-1.028 1.938-2.342 1.938-1.613 0-2.518-1.028-2.518-2.729v-.747c0-1.7.914-2.75 2.518-2.75 1.318 0 2.29.812 2.342 1.999v.11h-1.147c-.048-.638-.505-1.108-1.186-1.108Z"
                                            ></path>
                                        </svg>
                                    </div>
                                    <div class="sm:text-[14px] text-[13px] font-semibold mt-2">C#</div>
                                </div>
                                <div>
                                    <div class="md:size-10 size-8 mx-auto text-[#7377AD]">
                                        <svg class="size-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M320 104.5c171.4 0 303.2 72.2 303.2 151.5S491.3 407.5 320 407.5c-171.4 0-303.2-72.2-303.2-151.5S148.7 104.5 320 104.5m0-16.8C143.3 87.7 0 163 0 256s143.3 168.3 320 168.3S640 349 640 256 496.7 87.7 320 87.7zM218.2 242.5c-7.9 40.5-35.8 36.3-70.1 36.3l13.7-70.6c38 0 63.8-4.1 56.4 34.3zM97.4 350.3h36.7l8.7-44.8c41.1 0 66.6 3 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7h-70.7L97.4 350.3zm185.7-213.6h36.5l-8.7 44.8c31.5 0 60.7-2.3 74.8 10.7 14.8 13.6 7.7 31-8.3 113.1h-37c15.4-79.4 18.3-86 12.7-92-5.4-5.8-17.7-4.6-47.4-4.6l-18.8 96.6h-36.5l32.7-168.6zM505 242.5c-8 41.1-36.7 36.3-70.1 36.3l13.7-70.6c38.2 0 63.8-4.1 56.4 34.3zM384.2 350.3H421l8.7-44.8c43.2 0 67.1 2.5 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7H417l-32.8 168.7z"
                                            ></path>
                                        </svg>
                                    </div>
                                    <div class="sm:text-[14px] text-[13px] font-semibold mt-2">PHP</div>
                                </div>
                                <div>
                                    <div class="md:size-10 size-8 mx-auto text-[#AB1105]">
                                        <svg class="size-full" stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title></title>
                                            <path d="M7.81 7.9l-2.97 2.95 7.19 7.18 2.96-2.95 4.22-4.23-2.96-2.96v-.01H7.8zM12 0L1.53 6v12L12 24l10.47-6V6L12 0zm8.47 16.85L12 21.73l-8.47-4.88V7.12L12 2.24l8.47 4.88v9.73z"></path>
                                        </svg>
                                    </div>
                                    <div class="sm:text-[14px] text-[13px] font-semibold mt-2">Ruby</div>
                                </div>
                                <div>
                                    <div class="md:size-10 size-8 mx-auto text-[#3971A1]">
                                        <svg class="size-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M439.8 200.5c-7.7-30.9-22.3-54.2-53.4-54.2h-40.1v47.4c0 36.8-31.2 67.8-66.8 67.8H172.7c-29.2 0-53.4 25-53.4 54.3v101.8c0 29 25.2 46 53.4 54.3 33.8 9.9 66.3 11.7 106.8 0 26.9-7.8 53.4-23.5 53.4-54.3v-40.7H226.2v-13.6h160.2c31.1 0 42.6-21.7 53.4-54.2 11.2-33.5 10.7-65.7 0-108.6zM286.2 404c11.1 0 20.1 9.1 20.1 20.3 0 11.3-9 20.4-20.1 20.4-11 0-20.1-9.2-20.1-20.4.1-11.3 9.1-20.3 20.1-20.3zM167.8 248.1h106.8c29.7 0 53.4-24.5 53.4-54.3V91.9c0-29-24.4-50.7-53.4-55.6-35.8-5.9-74.7-5.6-106.8.1-45.2 8-53.4 24.7-53.4 55.6v40.7h106.9v13.6h-147c-31.1 0-58.3 18.7-66.8 54.2-9.8 40.7-10.2 66.1 0 108.6 7.6 31.6 25.7 54.2 56.8 54.2H101v-48.8c0-35.3 30.5-66.4 66.8-66.4zm-6.7-142.6c-11.1 0-20.1-9.1-20.1-20.3.1-11.3 9-20.4 20.1-20.4 11 0 20.1 9.2 20.1 20.4s-9 20.3-20.1 20.3z"
                                            ></path>
                                        </svg>
                                    </div>
                                    <div class="sm:text-[14px] text-[13px] font-semibold mt-2">Python</div>
                                </div>
                                <div>
                                    <div class="md:size-10 size-8 mx-auto text-[#E59729]">
                                        <svg class="size-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M32 32v448h448V32zm240 348c0 43.61-25.76 64.87-63.05 64.87-33.68 0-53.23-17.44-63.15-38.49l34.28-20.75c6.61 11.73 11.63 21.65 26.06 21.65 12 0 21.86-5.41 21.86-26.46V240h44zm99.35 63.87c-39.09 0-64.35-17.64-76.68-42L329 382c9 14.74 20.75 24.56 41.5 24.56 17.44 0 27.57-7.72 27.57-19.75 0-14.43-10.43-19.54-29.68-28l-10.52-4.52c-30.38-12.92-50.52-29.16-50.52-63.45 0-31.57 24.05-54.63 61.64-54.63 26.77 0 46 8.32 59.85 32.68L396 290c-7.22-12.93-15-18-27.06-18-12.33 0-20.15 7.82-20.15 18 0 12.63 7.82 17.74 25.86 25.56l10.52 4.51c35.79 15.34 55.94 31 55.94 66.16.01 37.9-29.76 57.64-69.76 57.64z"
                                            ></path>
                                        </svg>
                                    </div>
                                    <div class="sm:text-[14px] text-[13px] font-semibold mt-2">JavaScript</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <input type="radio" name="insightsSection" id="eCommerce" class="hidden peer/ass eCommerce" />
                        <div class="text-sm md:text-base md:leading-8 peer-checked/ass:relative absolute peer-checked/ass:z-[1] translate-y-60 peer-checked/ass:translate-y-0 -z-20 peer-checked/ass:opacity-100 opacity-0 inset-0 pointer-events-none peer-checked/ass:pointer-events-auto duration-500 transition-all ease-in-out">
                            <a href="#" class="text-semibold font-semibold md:text-2xl text-xl text-black">eCommerce Solution</a>
                            <div class="border border-dashed bg-white border-gray-400 md:p-3 p-2.5 rounded-[8px] md:my-4 my-3">
                                <p class="md:text-[15px] text-[14px] md:leading-[28px] leading-[26px] max-w-3xl text-gray-950 font-medium">
                                    At Logic Vine Infotech, we deliver tailored eCommerce development solutions that boost online sales and enhance customer experiences. Our expert team builds secure, scalable platforms with user-friendly interfaces and advanced
                                    features to help your business thrive in the digital marketplace.
                                </p>
                                <div class="flex items-center justify-end md:mt-3 mt-2.5">
                                    <a href="{{ route('web-development') }}" class="text-[13px] font-medium bg-theme2 md:py-1.5 py-2.5 md:px-6 px-4 rounded-[7px] text-white transition-all duration-300 ease-in-out hover:bg-[#333]">
                                        <span class="">EXPLORE MORE<i class="fa-solid fa-arrow-right-long ml-3"></i></span>
                                    </a>
                                </div>      
                            </div>
                            <div class="flex gap-2.5 flex-wrap max-w-6xl md:pt-3 pt-2">
                                <div class="text-[13px] transition-all ease-in-out duration-300 hover:-translate-y-2 px-4 py-1 text-white rounded-md bg-theme1 w-max backdrop-blur-sm text-nowrap">
                                    <i class="fa-regular fa-circle-check"></i>
                                    eCommerce Development
                                </div>
                                <div class="text-[13px] transition-all ease-in-out duration-300 hover:-translate-y-2 px-4 py-1 text-white rounded-md bg-theme1 w-max backdrop-blur-sm text-nowrap">
                                    <i class="fa-regular fa-circle-check"></i>
                                    Magento Development
                                </div>
                                <div class="text-[13px] transition-all ease-in-out duration-300 hover:-translate-y-2 px-4 py-1 text-white rounded-md bg-theme1 w-max backdrop-blur-sm text-nowrap">
                                    <i class="fa-regular fa-circle-check"></i>
                                    Shopify Development
                                </div>
                                <div class="text-[13px] transition-all ease-in-out duration-300 hover:-translate-y-2 px-4 py-1 text-white rounded-md bg-theme1 w-max backdrop-blur-sm text-nowrap">
                                    <i class="fa-regular fa-circle-check"></i>
                                    Worldpress Development
                                </div>
                            </div>
                            <div class="flex items-center flex-wrap overflow-hidden md:mt-10 sm:mt-7 mt-6 md:gap-9 sm:gap-6 gap-4 *:w-auto *:text-center *:gap-2 *:*:text-center">
                                <div>
                                    <div class="md:size-10 size-8 mx-auto text-[#EA6021]">
                                        <svg class="size-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M445.7 127.9V384l-63.4 36.5V164.7L223.8 73.1 65.2 164.7l.4 255.9L2.3 384V128.1L224.2 0l221.5 127.9zM255.6 420.5L224 438.9l-31.8-18.2v-256l-63.3 36.6.1 255.9 94.9 54.9 95.1-54.9v-256l-63.4-36.6v255.9z"
                                            ></path>
                                        </svg>
                                    </div>
                                    <div class="sm:text-[14px] text-[13px] font-semibold mt-2">Magento</div>
                                </div>
                                <div>
                                    <div class="md:size-10 size-8 mx-auto text-[#90B945]">
                                        <svg class="size-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M388.32,104.1a4.66,4.66,0,0,0-4.4-4c-2,0-37.23-.8-37.23-.8s-21.61-20.82-29.62-28.83V503.2L442.76,472S388.72,106.5,388.32,104.1ZM288.65,70.47a116.67,116.67,0,0,0-7.21-17.61C271,32.85,255.42,22,237,22a15,15,0,0,0-4,.4c-.4-.8-1.2-1.2-1.6-2C223.4,11.63,213,7.63,200.58,8c-24,.8-48,18-67.25,48.83-13.61,21.62-24,48.84-26.82,70.06-27.62,8.4-46.83,14.41-47.23,14.81-14,4.4-14.41,4.8-16,18-1.2,10-38,291.82-38,291.82L307.86,504V65.67a41.66,41.66,0,0,0-4.4.4S297.86,67.67,288.65,70.47ZM233.41,87.69c-16,4.8-33.63,10.4-50.84,15.61,4.8-18.82,14.41-37.63,25.62-50,4.4-4.4,10.41-9.61,17.21-12.81C232.21,54.86,233.81,74.48,233.41,87.69ZM200.58,24.44A27.49,27.49,0,0,1,215,28c-6.4,3.2-12.81,8.41-18.81,14.41-15.21,16.42-26.82,42-31.62,66.45-14.42,4.41-28.83,8.81-42,12.81C131.33,83.28,163.75,25.24,200.58,24.44ZM154.15,244.61c1.6,25.61,69.25,31.22,73.25,91.66,2.8,47.64-25.22,80.06-65.65,82.47-48.83,3.2-75.65-25.62-75.65-25.62l10.4-44s26.82,20.42,48.44,18.82c14-.8,19.22-12.41,18.81-20.42-2-33.62-57.24-31.62-60.84-86.86-3.2-46.44,27.22-93.27,94.47-97.68,26-1.6,39.23,4.81,39.23,4.81L221.4,225.39s-17.21-8-37.63-6.4C154.15,221,153.75,239.8,154.15,244.61ZM249.42,82.88c0-12-1.6-29.22-7.21-43.63,18.42,3.6,27.22,24,31.23,36.43Q262.63,78.68,249.42,82.88Z"
                                            ></path>
                                        </svg>
                                    </div>
                                    <div class="sm:text-[14px] text-[13px] font-semibold mt-2">Shopify</div>
                                </div>
                                <div>
                                    <div class="md:size-10 size-8 mx-auto text-[#207196]">
                                        <svg class="size-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M61.7 169.4l101.5 278C92.2 413 43.3 340.2 43.3 256c0-30.9 6.6-60.1 18.4-86.6zm337.9 75.9c0-26.3-9.4-44.5-17.5-58.7-10.8-17.5-20.9-32.4-20.9-49.9 0-19.6 14.8-37.8 35.7-37.8.9 0 1.8.1 2.8.2-37.9-34.7-88.3-55.9-143.7-55.9-74.3 0-139.7 38.1-177.8 95.9 5 .2 9.7.3 13.7.3 22.2 0 56.7-2.7 56.7-2.7 11.5-.7 12.8 16.2 1.4 17.5 0 0-11.5 1.3-24.3 2l77.5 230.4L249.8 247l-33.1-90.8c-11.5-.7-22.3-2-22.3-2-11.5-.7-10.1-18.2 1.3-17.5 0 0 35.1 2.7 56 2.7 22.2 0 56.7-2.7 56.7-2.7 11.5-.7 12.8 16.2 1.4 17.5 0 0-11.5 1.3-24.3 2l76.9 228.7 21.2-70.9c9-29.4 16-50.5 16-68.7zm-139.9 29.3l-63.8 185.5c19.1 5.6 39.2 8.7 60.1 8.7 24.8 0 48.5-4.3 70.6-12.1-.6-.9-1.1-1.9-1.5-2.9l-65.4-179.2zm183-120.7c.9 6.8 1.4 14 1.4 21.9 0 21.6-4 45.8-16.2 76.2l-65 187.9C426.2 403 468.7 334.5 468.7 256c0-37-9.4-71.8-26-102.1zM504 256c0 136.8-111.3 248-248 248C119.2 504 8 392.7 8 256 8 119.2 119.2 8 256 8c136.7 0 248 111.2 248 248zm-11.4 0c0-130.5-106.2-236.6-236.6-236.6C125.5 19.4 19.4 125.5 19.4 256S125.6 492.6 256 492.6c130.5 0 236.6-106.1 236.6-236.6z"
                                            ></path>
                                        </svg>
                                    </div>
                                    <div class="sm:text-[14px] text-[13px] font-semibold mt-2">Wordpress</div>
                                </div>
                                <div>
                                    <div class="md:size-10 size-8 mx-auto text-[#322F3D]">
                                        <svg class="size-full" stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title></title>
                                            <path
                                                d="M12.645 13.663h3.027c.861 0 1.406-.474 1.406-1.235 0-.717-.545-1.234-1.406-1.234h-3.027c-.1 0-.187.086-.187.172v2.125c.015.1.086.172.187.172zm0 4.896h3.128c.961 0 1.535-.488 1.535-1.35 0-.746-.545-1.35-1.535-1.35h-3.128c-.1 0-.187.087-.187.173v2.34c.015.115.086.187.187.187zM23.72.053l-8.953 8.93h1.464c2.281 0 3.63 1.435 3.63 3 0 1.235-.832 2.14-1.722 2.541-.143.058-.143.259.014.316 1.033.402 1.765 1.48 1.765 2.742 0 1.78-1.19 3.202-3.5 3.202h-6.342c-.1 0-.187-.086-.187-.172V13.85L.062 23.64c-.13.13-.043.359.143.359h23.631a.16.16 0 0 0 .158-.158V.182c.043-.158-.158-.244-.273-.13z"
                                            ></path>
                                        </svg>
                                    </div>
                                    <div class="sm:text-[14px] text-[13px] font-semibold mt-2">BigCommerce</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- radio Ends -->
        </div>
    </section>
    <!-- ***** service section end ***** -->

    <!-- ***** why choose us section start ***** -->
    <section class="bg-gray-100/80 md:mt-14 sm:mt-12 mt-12 md:pt-12 pt-10 md:pb-16 sm:pb-14 pb-12">
        <div class="container xl:px-[18px] md:px-4 px-3.5 mx-auto">
            <div class="heading-part">
                <h2 class="text-black text-center lg:text-[38px] md:text-[32px] sm:text-[26px] text-[22px] lg:leading-[50px] font-semibold">Why Choose<span class="text-theme2"> Us</span></h2>
                <div class="relative bg-theme2 md:h-[6px] h-[5px] md:w-[100px] w-[90px] mx-auto rounded-[30px] md:mt-2 mt-[5px]">
                    <div class="absolute left-0 top-[-1.9px] bg-white h-[10px] w-[10px] rounded-full animate-bounce-custom"></div>
                </div>
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 md:gap-5 gap-3 md:mt-7 sm:mt-5 mt-4">
                <div class="relative md:p-6 p-4 rounded-xl bg-white shadow border group transition-all ease-in-out duration-300 hover:border-theme2">
                    <div class="bg-gradient-to-r from-theme2 to-[#eab20821] h-[4px] w-[110px] transition-all ease-in-out duration-300 group-hover:w-full"></div>
                    <div class="font-semibold mt-5 text-[18px]">
                        Expertise & Innovation
                    </div>
                    <div class="text-[14px] text-gray-600 leading-[25px] md:mt-3 mt-2.5">
                        Our skilled professionals stay ahead with the latest technologies and trends to deliver cutting-edge solutions tailored to your business needs.
                    </div>
                    <div class="md:mt-5 mt-3.5 flex flex-col md:gap-2.5 gap-2">
                        <div class="rounded-full bg-gradient-to-r t from-[#eab2083a] to-[#ffffff] px-4 py-[8px] md:text-[14px] text-[13px] font-medium">
                            Industry-leading expertise  
                        </div>
                        <div class="rounded-full bg-gradient-to-r t from-[#eab2083a] to-[#ffffff] px-4 py-[8px] md:text-[14px] text-[13px] font-medium">
                            Latest technologies & frameworks  
                        </div>
                        <div class="rounded-full bg-gradient-to-r t from-[#eab2083a] to-[#ffffff] px-4 py-[8px] md:text-[14px] text-[13px] font-medium">
                            Creative & result-driven approach
                        </div>
                        <div class="rounded-full bg-gradient-to-r t from-[#eab2083a] to-[#ffffff] px-4 py-[8px] md:text-[14px] text-[13px] font-medium">
                            Continuous improvement
                        </div>
                    </div>
                </div>
                <div class="relative md:p-6 p-4 rounded-xl bg-white shadow border group transition-all ease-in-out duration-300 hover:border-theme2">
                    <div class="bg-gradient-to-r from-theme2 to-[#eab20821] h-[4px] w-[110px] transition-all ease-in-out duration-300 group-hover:w-full"></div>
                    <div class="font-semibold mt-5 text-[18px]">
                        Client-Centric Approach
                    </div>
                    <div class="text-[14px] text-gray-600 leading-[25px] md:mt-3 mt-2.5">
                        We work closely with our clients to understand their goals and deliver customized solutions that align perfectly with their vision.
                    </div>
                    <div class="md:mt-5 mt-3.5 flex flex-col md:gap-2.5 gap-2">
                        <div class="rounded-full bg-gradient-to-r t from-[#eab2083a] to-[#ffffff] px-4 py-[8px] md:text-[14px] text-[13px] font-medium">
                            Personalized solutions
                        </div>
                        <div class="rounded-full bg-gradient-to-r t from-[#eab2083a] to-[#ffffff] px-4 py-[8px] md:text-[14px] text-[13px] font-medium">
                            Transparent communication
                        </div>
                        <div class="rounded-full bg-gradient-to-r t from-[#eab2083a] to-[#ffffff] px-4 py-[8px] md:text-[14px] text-[13px] font-medium">
                            Long-term client relationships
                        </div>
                        <div class="rounded-full bg-gradient-to-r t from-[#eab2083a] to-[#ffffff] px-4 py-[8px] md:text-[14px] text-[13px] font-medium">
                            Dedicated support
                        </div>
                    </div>
                </div>  
                <div class="relative md:p-6 p-4 rounded-xl bg-white shadow border group transition-all ease-in-out duration-300 hover:border-theme2">
                    <div class="bg-gradient-to-r from-theme2 to-[#eab20821] h-[4px] w-[110px] transition-all ease-in-out duration-300 group-hover:w-full"></div>
                    <div class="font-semibold mt-5 text-[18px]">
                        Quality & Reliability
                    </div>
                    <div class="text-[14px] text-gray-600 leading-[25px] md:mt-3 mt-2.5">
                        From planning to deployment, we ensure high-performance, scalable, and secure solutions that exceed industry standards.
                    </div>
                    <div class="md:mt-5 mt-3.5 flex flex-col md:gap-2.5 gap-2">
                        <div class="rounded-full bg-gradient-to-r t from-[#eab2083a] to-[#ffffff] px-4 py-[8px] md:text-[14px] text-[13px] font-medium">
                            High-quality development
                        </div>
                        <div class="rounded-full bg-gradient-to-r t from-[#eab2083a] to-[#ffffff] px-4 py-[8px] md:text-[14px] text-[13px] font-medium">
                            Secure & scalable solutions
                        </div>
                        <div class="rounded-full bg-gradient-to-r t from-[#eab2083a] to-[#ffffff] px-4 py-[8px] md:text-[14px] text-[13px] font-medium">
                            Rigorous testing & QA
                        </div>
                        <div class="rounded-full bg-gradient-to-r t from-[#eab2083a] to-[#ffffff] px-4 py-[8px] md:text-[14px] text-[13px] font-medium">
                            On-time delivery
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** why choose us section end ***** -->

    <!-- ***** cta section start ***** -->
    <section class="md:mt-14 sm:mt-12 mt-10">
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

    <!--***** how we work section start *****  -->
    <section class="md:mt-14 sm:mt-12 mt-10">
        <div class="container xl:px-[18px] md:px-4 px-3.5 mx-auto">
            <div class="heading-part">
                <h2 class="text-black lg:text-[38px] md:text-[32px] sm:text-[26px] text-[22px] lg:leading-[50px] text-center font-semibold">How We 
                <span class="text-theme2">Work</span></h2>
                <div class="relative bg-theme2 md:h-[6px] h-[5px] md:w-[100px] w-[90px] mx-auto rounded-[30px] md:mt-2 mt-[5px]">
                    <div class="absolute left-0 top-[-1.9px] bg-white h-[10px] w-[10px] rounded-full animate-bounce-custom"></div>
                </div>
            </div>
            <div class="grid lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-5 mt-7 relative after:content-[''] after:absolute after:w-full after:h-[2px] after:bg-gray-200 after:left-0 after:-translate-y-1/2 after:top-[38.6%] lg:after:block after:hidden">
                <div>
                    <div class="md:size-[180px] size-[140px] rounded-full mx-auto mb-4 overflow-hidden">
                        <img src="{{asset('assets/img/approach-img1.png')}}" alt="step-1" class="h-full w-full">
                    </div>
                    <div class="h-[10px] relative z-10 w-[10px] rounded-full mb-[25px] bg-theme2 mx-auto"></div>
                    <div class="md:p-4 p-3.5 rounded-md group bg-[linear-gradient(180deg,rgba(237,241,252,0.38)_0%,rgba(201,215,255,0.13)_100%)] bg-gray-100 relative before:content-[''] before:absolute before:bottom-0 before:left-0 before:w-full before:h-[70px] before:rounded-b-[5px] before:bg-[linear-gradient(180deg,rgba(237,241,252,0.00)_0%,rgba(237,241,252,0.76)_26.46%,#EDF1FC_45.7%)] before:z-[1] after:content-[''] after:absolute after:w-[2px] after:h-[33px] after:bg-gray-300 after:left-1/2 after:-translate-x-1/2 after:top-[-33px]">
                        <div class="overflow-hidden">
                            <div class="max-h-[260px] transition-all duration-[4s] ease-in-out group-hover:-translate-y-[80%]">
                                <span class="text-theme1 font-semibold text-[13px]">STEP 01</span>
                                <div class="font-semibold md:text-[18px] text-[17px] mt-[5px] mb-[8px] ">Discovery &amp; Consultation</div>
                                <p class="text-[#3F444B] text-[13px] mb-[12px] leading-[23px]">Foren your case studies issoni crucial touris then attention of your audience.</p>
                                <ul class="list-disc pl-4 flex flex-col gap-[10px]">
                                    <li class="text-[#3F444B] text-[13px] leading-[23px]"><strong class="text-black font-semibold">Brainstorming: </strong>Collaborate to generate and refine innovative ideas.</li>
                                    <li class="text-[#3F444B] text-[13px] leading-[23px]"><strong class="text-black font-semibold">Problem Identification: </strong>Identify market gaps and challenges your startup.</li>
                                    <li class="text-[#3F444B] text-[13px] leading-[23px]"><strong class="text-black font-semibold">Strategic Planning: </strong>Develop a roadmap by strategically aligning innovative ideas.</li>
                                    <li class="text-[#3F444B] text-[13px] leading-[23px]"><strong class="text-black font-semibold">Solution Proposals: </strong>Offer specialised remedies based on identified market gaps.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md:size-[180px] size-[140px] rounded-full mx-auto mb-4 overflow-hidden">
                        <img src="{{asset('assets/img/approach-img2.png')}}" alt="step-2" class="h-full w-full">
                    </div>
                    <div class="h-[10px] relative z-10 w-[10px] rounded-full mb-[25px] bg-theme2 mx-auto"></div>
                    <div class="md:p-4 p-3.5 rounded-md group bg-[linear-gradient(180deg,rgba(237,241,252,0.38)_0%,rgba(201,215,255,0.13)_100%)] bg-gray-100 relative before:content-[''] before:absolute before:bottom-0 before:left-0 before:w-full before:h-[70px] before:rounded-b-[5px] before:bg-[linear-gradient(180deg,rgba(237,241,252,0.00)_0%,rgba(237,241,252,0.76)_26.46%,#EDF1FC_45.7%)] before:z-[1] after:content-[''] after:absolute after:w-[2px] after:h-[33px] after:bg-gray-300 after:left-1/2 after:-translate-x-1/2 after:top-[-33px]">
                        <div class="overflow-hidden">
                            <div class="max-h-[260px] transition-all duration-[4s] ease-in-out group-hover:-translate-y-[80%]">
                                <span class="text-theme1 font-semibold text-[13px]">STEP 02</span>
                                <div class="font-semibold md:text-[18px] text-[17px] mt-[5px] mb-[8px] ">Planning and Strategy </div>
                                <p class="text-[#3F444B] text-[13px] mb-[12px] leading-[23px]">Strategic planning for optimal results in a concise, effective approach.</p>
                                <ul class="list-disc pl-4 flex flex-col gap-[10px]">
                                    <li class="text-[#3F444B] text-[13px] leading-[23px]"><strong class="text-black font-semibold">Collaborating: </strong>Work together to produce and improve creative concepts.</li>
                                    <li class="text-[#3F444B] text-[13px] leading-[23px]"><strong class="text-black font-semibold">Resource Allocation: </strong>Optimize planning by efficiently allocating resources and ensuring a streamlined approach.</li>
                                    <li class="text-[#3F444B] text-[13px] leading-[23px]"><strong class="text-black font-semibold">Problem Identification: </strong>Determine your startup's obstacles and market gaps.</li>
                                    <li class="text-[#3F444B] text-[13px] leading-[23px]"><strong class="text-black font-semibold">Solution Development: </strong>Translate identified challenges into strategic solutions and business growth.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md:size-[180px] size-[140px] rounded-full mx-auto mb-4 overflow-hidden">
                        <img src="{{asset('assets/img/approach-img3.png')}}" alt="step-3" class="h-full w-full">
                    </div>
                    <div class="h-[10px] relative z-10 w-[10px] rounded-full mb-[25px] bg-theme2 mx-auto"></div>
                    <div class="md:p-4 p-3.5 rounded-md group bg-[linear-gradient(180deg,rgba(237,241,252,0.38)_0%,rgba(201,215,255,0.13)_100%)] bg-gray-100 relative before:content-[''] before:absolute before:bottom-0 before:left-0 before:w-full before:h-[70px] before:rounded-b-[5px] before:bg-[linear-gradient(180deg,rgba(237,241,252,0.00)_0%,rgba(237,241,252,0.76)_26.46%,#EDF1FC_45.7%)] before:z-[1] after:content-[''] after:absolute after:w-[2px] after:h-[33px] after:bg-gray-300 after:left-1/2 after:-translate-x-1/2 after:top-[-33px]">
                        <div class="overflow-hidden">
                            <div class="max-h-[260px] transition-all duration-[4s] ease-in-out group-hover:-translate-y-[80%]">
                                <span class="text-theme1 font-semibold text-[13px]">STEP 03</span>
                                <div class="font-semibold md:text-[18px] text-[17px] mt-[5px] mb-[8px] ">Design & Development</div>
                                <p class="text-[#3F444B] text-[13px] mb-[12px] leading-[23px]">Crafting seamless experiences through innovative design and development.</p>
                                <ul class="list-disc pl-4 flex flex-col gap-[10px]">
                                    <li class="text-[#3F444B] text-[13px] leading-[23px]"><strong class="text-black font-semibold">Generating ideas: </strong>Come up with and work through creative ideas together.</li>
                                    <li class="text-[#3F444B] text-[13px] leading-[23px]"><strong class="text-black font-semibold">Prototyping Excellence: </strong>Transform ideas into tangible prototypes and user-centric design.</li>
                                    <li class="text-[#3F444B] text-[13px] leading-[23px]"><strong class="text-black font-semibold">Iterative Development: </strong>Continuously refine and enhance solutions based on identified problems.</li>
                                    <li class="text-[#3F444B] text-[13px] leading-[23px]"><strong class="text-black font-semibold">Problem Identification: </strong>Identify market gaps and challenges your startup.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md:size-[180px] size-[140px] rounded-full mx-auto mb-4 overflow-hidden">
                        <img src="{{asset('assets/img/approach-img4.png')}}" alt="step-4" class="h-full w-full">
                    </div>
                    <div class="h-[10px] relative z-10 w-[10px] rounded-full mb-[25px] bg-theme2 mx-auto"></div>
                    <div class="md:p-4 p-3.5 rounded-md group bg-[linear-gradient(180deg,rgba(237,241,252,0.38)_0%,rgba(201,215,255,0.13)_100%)] bg-gray-100 relative before:content-[''] before:absolute before:bottom-0 before:left-0 before:w-full before:h-[70px] before:rounded-b-[5px] before:bg-[linear-gradient(180deg,rgba(237,241,252,0.00)_0%,rgba(237,241,252,0.76)_26.46%,#EDF1FC_45.7%)] before:z-[1] after:content-[''] after:absolute after:w-[2px] after:h-[33px] after:bg-gray-300 after:left-1/2 after:-translate-x-1/2 after:top-[-33px]">
                        <div class="overflow-hidden">
                            <div class="max-h-[260px] transition-all duration-[4s] ease-in-out group-hover:-translate-y-[80%]">
                                <span class="text-theme1 font-semibold text-[13px]">STEP 04</span>
                                <div class="font-semibold md:text-[18px] text-[17px] mt-[5px] mb-[8px] ">Quality Assurance</div>
                                <p class="text-[#3F444B] text-[13px] mb-[12px] leading-[23px]">Ensuring excellence through meticulous testing and validation processes.</p>
                                <ul class="list-disc pl-4 flex flex-col gap-[10px]">
                                    <li class="text-[#3F444B] text-[13px] leading-[23px]"><strong class="text-black font-semibold">Idea generation: </strong>Collaborate together to generate and develop creative ideas.</li>
                                    <li class="text-[#3F444B] text-[13px] leading-[23px]"><strong class="text-black font-semibold">Continuous Testing:: </strong>Rigorous quality assurance through ongoing testing ensures robust solutions.</li>
                                    <li class="text-[#3F444B] text-[13px] leading-[23px]"><strong class="text-black font-semibold">Performance Testing: </strong>Rigorously evaluate the functionality and efficiency of your startup's systems.</li>
                                    <li class="text-[#3F444B] text-[13px] leading-[23px]"><strong class="text-black font-semibold">Problem Identification: </strong>Identify market gaps and challenges your startup.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--***** how we work section end *****  -->

    <!-- ***** industry we servive section start ***** -->
    <section class="bg-gray-100/80 md:mt-14 sm:mt-12 mt-12 pt-12 md:pb-16 sm:pb-14 pb-12">
        <div class="container xl:px-[18px] md:px-4 px-3.5 mx-auto">
            <div class="heading-part">
                <h2 class="text-black text-center lg:text-[38px] md:text-[32px] sm:text-[26px] text-[22px] lg:leading-[50px] font-semibold">Our Expertise Across <span class="text-theme2"> Industries</span></h2>
                <div class="relative bg-theme2 md:h-[6px] h-[5px] md:w-[100px] w-[90px] mx-auto rounded-[30px] md:mt-2 mt-[5px]">
                    <div class="absolute left-0 top-[-1.9px] bg-white h-[10px] w-[10px] rounded-full animate-bounce-custom"></div>
                </div>
                <p class="md:text-[16px] text-[14px] text-center font-medium text-balance md:mt-5 mt-3.5 text-slate-950 md:leading-[28px] leading-[26px]">
                    We deliver innovative IT solutions across multiple industries, helping businesses grow with technology-driven strategies. From startups to enterprises, we cater to diverse sectors with customized digital solutions.
                </p>
            </div>
            <div class="grid lg:grid-cols-7 md:grid-cols-5 sm:grid-cols-3 grid-cols-2 mt-7 gap-3">
                <a href="" class="bg-white overflow-hidden block group px-3 py-4 rounded-xl border shadow group relative before:content-[''] before:left-0 before:bottom-0 before:w-full before:h-[70%] before:bg-white hover:before:bg-[#333] before:transition-all before:duration-500 before:ease-in-out before:absolute hover:before:h-full">
                    <div class="md:size-[65px] size-[55px] overflow-hidden mx-auto bg-gray-200 flex items-center justify-center rounded-xl relative before:content-[''] before:left-[50%] before:top-0 before:w-0 before:h-full before:bg-white before:transition-all before:duration-[0.7s] before:ease-in-out before:absolute group-hover:before:w-full group-hover:before:left-0">
                        <img src="{{asset('assets/img/e-commerse-development-icon.svg')}}" alt="Banking and Finance" class="h-[26px] relative">
                    </div>
                    <div class="text-center font-medium block md:text-[15px] text-[14px] md:mt-3.5 mt-3 relative transition-all duration-500 ease-in-out group-hover:text-white">Banking and Finance</div>
                </a>
                <a href="" class="bg-white overflow-hidden block group px-3 py-4 rounded-xl border shadow group relative before:content-[''] before:left-0 before:bottom-0 before:w-full before:h-[70%] before:bg-white hover:before:bg-[#333] before:transition-all before:duration-500 before:ease-in-out before:absolute hover:before:h-full">
                    <div class="md:size-[65px] size-[55px] overflow-hidden mx-auto bg-gray-200 flex items-center justify-center rounded-xl relative before:content-[''] before:left-[50%] before:top-0 before:w-0 before:h-full before:bg-white before:transition-all before:duration-[0.7s] before:ease-in-out before:absolute group-hover:before:w-full group-hover:before:left-0">
                        <img src="{{asset('assets/img/e-commerse-development-icon.svg')}}" alt="Banking and Finance" class="h-[26px] relative">
                    </div>
                    <div class="text-center font-medium block md:text-[15px] text-[14px] md:mt-3.5 mt-3 relative transition-all duration-500 ease-in-out group-hover:text-white">Banking and Finance</div>
                </a>
                <a href="" class="bg-white overflow-hidden block group px-3 py-4 rounded-xl border shadow group relative before:content-[''] before:left-0 before:bottom-0 before:w-full before:h-[70%] before:bg-white hover:before:bg-[#333] before:transition-all before:duration-500 before:ease-in-out before:absolute hover:before:h-full">
                    <div class="md:size-[65px] size-[55px] overflow-hidden mx-auto bg-gray-200 flex items-center justify-center rounded-xl relative before:content-[''] before:left-[50%] before:top-0 before:w-0 before:h-full before:bg-white before:transition-all before:duration-[0.7s] before:ease-in-out before:absolute group-hover:before:w-full group-hover:before:left-0">
                        <img src="{{asset('assets/img/e-commerse-development-icon.svg')}}" alt="Banking and Finance" class="h-[26px] relative">
                    </div>
                    <div class="text-center font-medium block md:text-[15px] text-[14px] md:mt-3.5 mt-3 relative transition-all duration-500 ease-in-out group-hover:text-white">Banking and Finance</div>
                </a>
                <a href="" class="bg-white overflow-hidden block group px-3 py-4 rounded-xl border shadow group relative before:content-[''] before:left-0 before:bottom-0 before:w-full before:h-[70%] before:bg-white hover:before:bg-[#333] before:transition-all before:duration-500 before:ease-in-out before:absolute hover:before:h-full">
                    <div class="md:size-[65px] size-[55px] overflow-hidden mx-auto bg-gray-200 flex items-center justify-center rounded-xl relative before:content-[''] before:left-[50%] before:top-0 before:w-0 before:h-full before:bg-white before:transition-all before:duration-[0.7s] before:ease-in-out before:absolute group-hover:before:w-full group-hover:before:left-0">
                        <img src="{{asset('assets/img/e-commerse-development-icon.svg')}}" alt="Banking and Finance" class="h-[26px] relative">
                    </div>
                    <div class="text-center font-medium block md:text-[15px] text-[14px] md:mt-3.5 mt-3 relative transition-all duration-500 ease-in-out group-hover:text-white">Banking and Finance</div>
                </a>
                <a href="" class="bg-white overflow-hidden block group px-3 py-4 rounded-xl border shadow group relative before:content-[''] before:left-0 before:bottom-0 before:w-full before:h-[70%] before:bg-white hover:before:bg-[#333] before:transition-all before:duration-500 before:ease-in-out before:absolute hover:before:h-full">
                    <div class="md:size-[65px] size-[55px] overflow-hidden mx-auto bg-gray-200 flex items-center justify-center rounded-xl relative before:content-[''] before:left-[50%] before:top-0 before:w-0 before:h-full before:bg-white before:transition-all before:duration-[0.7s] before:ease-in-out before:absolute group-hover:before:w-full group-hover:before:left-0">
                        <img src="{{asset('assets/img/e-commerse-development-icon.svg')}}" alt="Banking and Finance" class="h-[26px] relative">
                    </div>
                    <div class="text-center font-medium block md:text-[15px] text-[14px] md:mt-3.5 mt-3 relative transition-all duration-500 ease-in-out group-hover:text-white">Banking and Finance</div>
                </a>
                <a href="" class="bg-white overflow-hidden block group px-3 py-4 rounded-xl border shadow group relative before:content-[''] before:left-0 before:bottom-0 before:w-full before:h-[70%] before:bg-white hover:before:bg-[#333] before:transition-all before:duration-500 before:ease-in-out before:absolute hover:before:h-full">
                    <div class="md:size-[65px] size-[55px] overflow-hidden mx-auto bg-gray-200 flex items-center justify-center rounded-xl relative before:content-[''] before:left-[50%] before:top-0 before:w-0 before:h-full before:bg-white before:transition-all before:duration-[0.7s] before:ease-in-out before:absolute group-hover:before:w-full group-hover:before:left-0">
                        <img src="{{asset('assets/img/e-commerse-development-icon.svg')}}" alt="Banking and Finance" class="h-[26px] relative">
                    </div>
                    <div class="text-center font-medium block md:text-[15px] text-[14px] md:mt-3.5 mt-3 relative transition-all duration-500 ease-in-out group-hover:text-white">Banking and Finance</div>
                </a>
                <a href="" class="bg-white overflow-hidden block group px-3 py-4 rounded-xl border shadow group relative before:content-[''] before:left-0 before:bottom-0 before:w-full before:h-[70%] before:bg-white hover:before:bg-[#333] before:transition-all before:duration-500 before:ease-in-out before:absolute hover:before:h-full">
                    <div class="md:size-[65px] size-[55px] overflow-hidden mx-auto bg-gray-200 flex items-center justify-center rounded-xl relative before:content-[''] before:left-[50%] before:top-0 before:w-0 before:h-full before:bg-white before:transition-all before:duration-[0.7s] before:ease-in-out before:absolute group-hover:before:w-full group-hover:before:left-0">
                        <img src="{{asset('assets/img/e-commerse-development-icon.svg')}}" alt="Banking and Finance" class="h-[26px] relative">
                    </div>
                    <div class="text-center font-medium block md:text-[15px] text-[14px] md:mt-3.5 mt-3 relative transition-all duration-500 ease-in-out group-hover:text-white">Banking and Finance</div>
                </a>
                <a href="" class="bg-white overflow-hidden block group px-3 py-4 rounded-xl border shadow group relative before:content-[''] before:left-0 before:bottom-0 before:w-full before:h-[70%] before:bg-white hover:before:bg-[#333] before:transition-all before:duration-500 before:ease-in-out before:absolute hover:before:h-full">
                    <div class="md:size-[65px] size-[55px] overflow-hidden mx-auto bg-gray-200 flex items-center justify-center rounded-xl relative before:content-[''] before:left-[50%] before:top-0 before:w-0 before:h-full before:bg-white before:transition-all before:duration-[0.7s] before:ease-in-out before:absolute group-hover:before:w-full group-hover:before:left-0">
                        <img src="{{asset('assets/img/e-commerse-development-icon.svg')}}" alt="Banking and Finance" class="h-[26px] relative">
                    </div>
                    <div class="text-center font-medium block md:text-[15px] text-[14px] md:mt-3.5 mt-3 relative transition-all duration-500 ease-in-out group-hover:text-white">Banking and Finance</div>
                </a>
                <a href="" class="bg-white overflow-hidden block group px-3 py-4 rounded-xl border shadow group relative before:content-[''] before:left-0 before:bottom-0 before:w-full before:h-[70%] before:bg-white hover:before:bg-[#333] before:transition-all before:duration-500 before:ease-in-out before:absolute hover:before:h-full">
                    <div class="md:size-[65px] size-[55px] overflow-hidden mx-auto bg-gray-200 flex items-center justify-center rounded-xl relative before:content-[''] before:left-[50%] before:top-0 before:w-0 before:h-full before:bg-white before:transition-all before:duration-[0.7s] before:ease-in-out before:absolute group-hover:before:w-full group-hover:before:left-0">
                        <img src="{{asset('assets/img/e-commerse-development-icon.svg')}}" alt="Banking and Finance" class="h-[26px] relative">
                    </div>
                    <div class="text-center font-medium block md:text-[15px] text-[14px] md:mt-3.5 mt-3 relative transition-all duration-500 ease-in-out group-hover:text-white">Banking and Finance</div>
                </a>
                <a href="" class="bg-white overflow-hidden block group px-3 py-4 rounded-xl border shadow group relative before:content-[''] before:left-0 before:bottom-0 before:w-full before:h-[70%] before:bg-white hover:before:bg-[#333] before:transition-all before:duration-500 before:ease-in-out before:absolute hover:before:h-full">
                    <div class="md:size-[65px] size-[55px] overflow-hidden mx-auto bg-gray-200 flex items-center justify-center rounded-xl relative before:content-[''] before:left-[50%] before:top-0 before:w-0 before:h-full before:bg-white before:transition-all before:duration-[0.7s] before:ease-in-out before:absolute group-hover:before:w-full group-hover:before:left-0">
                        <img src="{{asset('assets/img/e-commerse-development-icon.svg')}}" alt="Banking and Finance" class="h-[26px] relative">
                    </div>
                    <div class="text-center font-medium block md:text-[15px] text-[14px] md:mt-3.5 mt-3 relative transition-all duration-500 ease-in-out group-hover:text-white">Banking and Finance</div>
                </a>
                <a href="" class="bg-white overflow-hidden block group px-3 py-4 rounded-xl border shadow group relative before:content-[''] before:left-0 before:bottom-0 before:w-full before:h-[70%] before:bg-white hover:before:bg-[#333] before:transition-all before:duration-500 before:ease-in-out before:absolute hover:before:h-full">
                    <div class="md:size-[65px] size-[55px] overflow-hidden mx-auto bg-gray-200 flex items-center justify-center rounded-xl relative before:content-[''] before:left-[50%] before:top-0 before:w-0 before:h-full before:bg-white before:transition-all before:duration-[0.7s] before:ease-in-out before:absolute group-hover:before:w-full group-hover:before:left-0">
                        <img src="{{asset('assets/img/e-commerse-development-icon.svg')}}" alt="Banking and Finance" class="h-[26px] relative">
                    </div>
                    <div class="text-center font-medium block md:text-[15px] text-[14px] md:mt-3.5 mt-3 relative transition-all duration-500 ease-in-out group-hover:text-white">Banking and Finance</div>
                </a>
                <a href="" class="bg-white overflow-hidden block group px-3 py-4 rounded-xl border shadow group relative before:content-[''] before:left-0 before:bottom-0 before:w-full before:h-[70%] before:bg-white hover:before:bg-[#333] before:transition-all before:duration-500 before:ease-in-out before:absolute hover:before:h-full">
                    <div class="md:size-[65px] size-[55px] overflow-hidden mx-auto bg-gray-200 flex items-center justify-center rounded-xl relative before:content-[''] before:left-[50%] before:top-0 before:w-0 before:h-full before:bg-white before:transition-all before:duration-[0.7s] before:ease-in-out before:absolute group-hover:before:w-full group-hover:before:left-0">
                        <img src="{{asset('assets/img/e-commerse-development-icon.svg')}}" alt="Banking and Finance" class="h-[26px] relative">
                    </div>
                    <div class="text-center font-medium block md:text-[15px] text-[14px] md:mt-3.5 mt-3 relative transition-all duration-500 ease-in-out group-hover:text-white">Banking and Finance</div>
                </a>
                <a href="" class="bg-white overflow-hidden block group px-3 py-4 rounded-xl border shadow group relative before:content-[''] before:left-0 before:bottom-0 before:w-full before:h-[70%] before:bg-white hover:before:bg-[#333] before:transition-all before:duration-500 before:ease-in-out before:absolute hover:before:h-full">
                    <div class="md:size-[65px] size-[55px] overflow-hidden mx-auto bg-gray-200 flex items-center justify-center rounded-xl relative before:content-[''] before:left-[50%] before:top-0 before:w-0 before:h-full before:bg-white before:transition-all before:duration-[0.7s] before:ease-in-out before:absolute group-hover:before:w-full group-hover:before:left-0">
                        <img src="{{asset('assets/img/e-commerse-development-icon.svg')}}" alt="Banking and Finance" class="h-[26px] relative">
                    </div>
                    <div class="text-center font-medium block md:text-[15px] text-[14px] md:mt-3.5 mt-3 relative transition-all duration-500 ease-in-out group-hover:text-white">Banking and Finance</div>
                </a>
                <a href="" class="bg-white overflow-hidden block group px-3 py-4 rounded-xl border shadow group relative before:content-[''] before:left-0 before:bottom-0 before:w-full before:h-[70%] before:bg-white hover:before:bg-[#333] before:transition-all before:duration-500 before:ease-in-out before:absolute hover:before:h-full">
                    <div class="md:size-[65px] size-[55px] overflow-hidden mx-auto bg-gray-200 flex items-center justify-center rounded-xl relative before:content-[''] before:left-[50%] before:top-0 before:w-0 before:h-full before:bg-white before:transition-all before:duration-[0.7s] before:ease-in-out before:absolute group-hover:before:w-full group-hover:before:left-0">
                        <img src="{{asset('assets/img/e-commerse-development-icon.svg')}}" alt="Banking and Finance" class="h-[26px] relative">
                    </div>
                    <div class="text-center font-medium block md:text-[15px] text-[14px] md:mt-3.5 mt-3 relative transition-all duration-500 ease-in-out group-hover:text-white">Banking and Finance</div>
                </a>
            </div>
        </div>
    </section>
    <!-- ***** industry we servive section end ***** -->

    <!-- ***** blog section start ***** -->
    @include('front-common.common-blog')
    <!-- ***** blog section end ***** -->
    
    <!-- ***** common contact form start ***** -->
    @include('front-common.form')
    <!-- ***** common contact form end ***** -->
@endsection