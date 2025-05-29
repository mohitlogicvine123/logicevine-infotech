<!-- resources/views/index.blade.php -->

@extends('front-layouts.main')  <!-- Corrected the path to match your folder -->

@section('content')
    <!-- ***** page heading section start ***** -->
    <section class="breadcrumb-section relative md:mb-28 mb-24 lg:pt-52 md:pt-48 pt-32 pb-10 bg-[url('/assets/img/breadcrumb-bg1.png'),_linear-gradient(180deg,_#121212_0%,_#121212_100%)] bg-cover bg-center">   
        <div class="container xl:px-[18px] md:px-4 px-3.5 mx-auto">
            <div class="relative">
                <div class="">
                    <ul class="inline-flex rounded-full border border-stone-600 md:gap-3 gap-2.5 py-2 md:px-6 px-5">
                        <li class="text-theme2 text-sm"><a href="/">Home</a></li>
                        <li class="text-white relative text-sm before:content-[''] before:w-[8px] before:h-[2px] before:left-0 before:top-1/2 before:-translate-y-1/2 before:bg-white before:absolute pl-5">Contact Us</li>
                    </ul>
                    <h1 class="text-white font-bold md:mt-6 mt-4 lg:text-[42px] md:text-[38px] sm:text-[32px] text-[22px] max-md:leading-[40px]">We're Here to Help | Contact Logicvine</h1>
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

    <div id="scrollsection">
        @include('front-common.form')
        <div class="h-[410px]">
            <iframe class="size-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.2787665330975!2d75.75567486987805!3d26.89464663635534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db5acde3ce009%3A0xff9c442c5909a485!2sLogicvine%20Infotech!5e0!3m2!1sen!2sin!4v1739267321413!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection
