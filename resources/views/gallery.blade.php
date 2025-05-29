<!-- resources/views/index.blade.php -->

@extends('front-layouts.main')  <!-- Corrected the path to match your folder -->
@section('title', 'Life @ Logicvine Infotech')

@section('content')
<style>
  .gallery-item {
    position: relative;
    overflow: hidden;
    cursor: pointer;
  }
  .overlay {
    position: absolute;
    inset: 0;
    background-color: rgba(0,0,0,0.6);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    font-size: 1.125rem; /* text-lg */
    opacity: 0;
    transition: opacity 0.3s ease;
    pointer-events: none;
  }
  .gallery-item:hover .overlay {
    opacity: 1;
  }
</style>
    <section class="breadcrumb-section relative lg:pt-80 md:pt-52 pt-32 lg:h-[100vh] lg:pb-10 sm:pb-12 pb-10 bg-[url('/assets/img/about-us.jpg')] bg-cover bg-top before:content-[''] before:top-0 before:left-0 before:size-full before:absolute before:bg-black/50">
        <div class="container md:px-3 px-3.5 mx-auto">
            <div class="relative">
                <div class="">
                    <h1 class="text-white font-bold md:mt-6 lg:text-[42px] md:text-[38px] sm:text-[32px] text-[23px]">Life @ Logicvine Infotech</h1>
                </div>
                <div class="md:mt-12 sm:mt-10 mt-5 flex items-center justify-center animate-up-down2">
                    <a href="#gallery" class="border border-[#ffffff80] sm:py-6 py-5 md:px-2.5 px-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-[#ffffff80] sm:h-[29px] h-[24px]" fill="none" viewBox="0 0 19 29">
                            <path d="M9.5 0V28M9.5 28C10 24.3333 12.4 17.1 18 17.5M9.5 28C8.5 24.1667 5.4 16.7 1 17.5"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap gap-1.5 justify-center mb-6">
            <button class="filter-btn px-4 text-[15px] font-medium py-2 rounded bg-theme2 text-white active" data-category="all">All Events</button>
            <button class="filter-btn bg-gray-200 px-4 text-[15px] font-medium py-2 rounded" data-category="birthday">Birthday</button>
            <button class="filter-btn bg-gray-200 px-4 text-[15px] font-medium py-2 rounded" data-category="diwali">Party</button>
            <button class="filter-btn bg-gray-200 px-4 text-[15px] font-medium py-2 rounded" data-category="holi">Holi</button>
            </div>

            <div id="all-events" class="tab-content grid grid-cols-4">
            <a href="{{asset('assets/gallery/birthday/birthday-1.webp')}}" class="glightbox gallery-item h-[300px]" data-gallery="all">
                <img src="{{asset('assets/gallery/birthday/birthday-1.webp')}}" alt="Birthday 1" class="size-full object-cover" />
                <div class="overlay">Birthday Celebration</div>
            </a>
            <a href="{{asset('assets/gallery/party/party-1.webp')}}" class="glightbox gallery-item h-[300px]" data-gallery="all">
                <img src="{{asset('assets/gallery/party/party-1.webp')}}" alt="Diwali 1" class="size-full object-cover" />
                <div class="overlay">Get Together Party</div>
            </a>
            <a href="{{asset('assets/gallery/holi/holi-celebration-1.webp')}}" class="glightbox gallery-item overflow-hidden h-[300px]" data-gallery="all">
                <img src="{{asset('assets/gallery/holi/holi-celebration-1.webp')}}" alt="Holi 1" class="size-full object-cover" />
                <div class="overlay">Holi Celebration</div>
            </a>
            <a href="{{asset('assets/gallery/birthday/birthday-4.webp')}}" class="glightbox gallery-item h-[300px]" data-gallery="all">
                <img src="{{asset('assets/gallery/birthday/birthday-4.webp')}}" alt="Birthday 2" class="size-full object-cover" />
                <div class="overlay">Birthday Celebration</div>
            </a>
            <a href="{{asset('assets/gallery/party/party-7.webp')}}" class="glightbox gallery-item h-[300px]" data-gallery="all">
                <img src="{{asset('assets/gallery/party/party-7.webp')}}" alt="Diwali 1" class="size-full object-cover" />
                <div class="overlay">Get Together Party</div>
            </a>
            <a href="{{asset('assets/gallery/holi/holi-celebration-13.webp')}}" class="glightbox gallery-item overflow-hidden h-[300px]" data-gallery="all">
                <img src="{{asset('assets/gallery/holi/holi-celebration-13.webp')}}" alt="Holi 2" class="size-full object-cover" />
                <div class="overlay">Holi Celebration</div>
            </a>
            </div>

            <div id="birthday-events" class="tab-content grid grid-cols-4 hidden">
            <a href="{{asset('assets/gallery/birthday/birthday-5.webp')}}" class="glightbox gallery-item h-[300px]" data-gallery="birthday">
                <img src="{{asset('assets/gallery/birthday/birthday-5.webp')}}" alt="Birthday 1" class="size-full object-cover" />
                <div class="overlay">Birthday Celebration</div>
            </a>
            <a href="{{asset('assets/gallery/birthday/birthday-6.webp')}}" class="glightbox gallery-item h-[300px]" data-gallery="birthday">
                <img src="{{asset('assets/gallery/birthday/birthday-6.webp')}}" alt="Birthday 2" class="size-full object-cover" />
                <div class="overlay">Birthday Celebration</div>
            </a>
            <a href="{{asset('assets/gallery/birthday/birthday-1.webp')}}" class="glightbox gallery-item h-[300px]" data-gallery="birthday">
                <img src="{{asset('assets/gallery/birthday/birthday-1.webp')}}" alt="Birthday 1" class="size-full object-cover" />
                <div class="overlay">Birthday Celebration</div>
            </a>
            <a href="{{asset('assets/gallery/birthday/birthday-2.webp')}}" class="glightbox gallery-item h-[300px]" data-gallery="birthday">
                <img src="{{asset('assets/gallery/birthday/birthday-2.webp')}}" alt="Birthday 2" class="size-full object-cover" />
                <div class="overlay">Birthday Celebration</div>
            </a>
            <a href="{{asset('assets/gallery/birthday/birthday-3.webp')}}" class="glightbox gallery-item h-[300px]" data-gallery="birthday">
                <img src="{{asset('assets/gallery/birthday/birthday-3.webp')}}" alt="Birthday 1" class="size-full object-cover" />
                <div class="overlay">Birthday Celebration</div>
            </a>
            <a href="{{asset('assets/gallery/birthday/birthday-4.webp')}}" class="glightbox gallery-item h-[300px]" data-gallery="birthday">
                <img src="{{asset('assets/gallery/birthday/birthday-4.webp')}}" alt="Birthday 2" class="size-full object-cover" />
                <div class="overlay">Birthday Celebration</div>
            </a>
            <!-- <a href="{{asset('assets/gallery/birthday/birthday-8.webp')}}" class="glightbox gallery-item h-[300px]" data-gallery="birthday">
                <img src="{{asset('assets/gallery/birthday/birthday-8.webp')}}" alt="Birthday 2" class="size-full object-cover" />
                <div class="overlay">Birthday Celebration</div>
            </a> -->
            </div>
            <div id="diwali-events" class="tab-content grid grid-cols-4 hidden">
            <a href="{{asset('assets/gallery/party/party-1.webp')}}" class="glightbox gallery-item h-[300px]" data-gallery="diwali">
                <img src="{{asset('assets/gallery/party/party-1.webp')}}" alt="Diwali 1" class="size-full object-cover" />
                <div class="overlay">Get Together Party</div>
            </a>
            <a href="{{asset('assets/gallery/party/party-2.webp')}}" class="glightbox gallery-item h-[300px]" data-gallery="diwali">
                <img src="{{asset('assets/gallery/party/party-2.webp')}}" alt="Diwali 1" class="size-full object-cover" />
                <div class="overlay">Get Together Party</div>
            </a>
            <a href="{{asset('assets/gallery/party/party-3.webp')}}" class="glightbox gallery-item h-[300px]" data-gallery="diwali">
                <img src="{{asset('assets/gallery/party/party-3.webp')}}" alt="Diwali 1" class="size-full object-cover" />
                <div class="overlay">Get Together Party</div>
            </a>
            <a href="{{asset('assets/gallery/party/party-4.webp')}}" class="glightbox gallery-item h-[300px]" data-gallery="diwali">
                <img src="{{asset('assets/gallery/party/party-4.webp')}}" alt="Diwali 1" class="size-full object-cover" />
                <div class="overlay">Get Together Party</div>
            </a>
            <a href="{{asset('assets/gallery/party/party-5.webp')}}" class="glightbox gallery-item h-[300px]" data-gallery="diwali">
                <img src="{{asset('assets/gallery/party/party-5.webp')}}" alt="Diwali 1" class="size-full object-cover" />
                <div class="overlay">Get Together Party</div>
            </a>
            <a href="{{asset('assets/gallery/party/party-6.webp')}}" class="glightbox gallery-item h-[300px]" data-gallery="diwali">
                <img src="{{asset('assets/gallery/party/party-6.webp')}}" alt="Diwali 1" class="size-full object-cover" />
                <div class="overlay">Get Together Party</div>
            </a>
            <a href="{{asset('assets/gallery/party/party-7.webp')}}" class="glightbox gallery-item h-[300px]" data-gallery="diwali">
                <img src="{{asset('assets/gallery/party/party-7.webp')}}" alt="Diwali 1" class="size-full object-cover" />
                <div class="overlay">Get Together Party</div>
            </a>
            </div>
            <div id="holi-events" class="tab-content grid grid-cols-4 gap-0 hidden">
            <a href="{{asset('assets/gallery/holi/holi-celebration-1.webp')}}" class="glightbox gallery-item overflow-hidden h-[300px]" data-gallery="holi">
                <img src="{{asset('assets/gallery/holi/holi-celebration-1.webp')}}" alt="Holi 1" class="size-full object-cover" />
                <div class="overlay">Holi Celebration</div>
            </a>
            <a href="{{asset('assets/gallery/holi/holi-celebration-7.webp')}}" class="glightbox gallery-item overflow-hidden h-[300px]" data-gallery="holi">
                <img src="{{asset('assets/gallery/holi/holi-celebration-7.webp')}}" alt="Holi 2"class="size-full object-cover" />
                <div class="overlay">Holi Celebration</div>
            </a>
            <a href="{{asset('assets/gallery/holi/holi-celebration-8.webp')}}" class="glightbox gallery-item overflow-hidden h-[300px]" data-gallery="holi">
                <img src="{{asset('assets/gallery/holi/holi-celebration-8.webp')}}" alt="Holi 1" class="size-full object-cover" />
                <div class="overlay">Holi Celebration</div>
            </a>
            <a href="{{asset('assets/gallery/holi/holi-celebration-9.webp')}}" class="glightbox gallery-item overflow-hidden h-[300px]" data-gallery="holi">
                <img src="{{asset('assets/gallery/holi/holi-celebration-9.webp')}}" alt="Holi 2"class="size-full object-cover" />
                <div class="overlay">Holi Celebration</div>
            </a>
            <a href="{{asset('assets/gallery/holi/holi-celebration-10.webp')}}" class="glightbox gallery-item overflow-hidden h-[300px]" data-gallery="holi">
                <img src="{{asset('assets/gallery/holi/holi-celebration-10.webp')}}" alt="Holi 1" class="size-full object-cover" />
                <div class="overlay">Holi Celebration</div>
            </a>
            <a href="{{asset('assets/gallery/holi/holi-celebration-11.webp')}}" class="glightbox gallery-item overflow-hidden h-[300px]" data-gallery="holi">
                <img src="{{asset('assets/gallery/holi/holi-celebration-11.webp')}}" alt="Holi 2" class="size-full object-cover" />
                <div class="overlay">Holi Celebration</div>
            </a>
            <a href="{{asset('assets/gallery/holi/holi-celebration-12.webp')}}" class="glightbox gallery-item overflow-hidden h-[300px]" data-gallery="holi">
                <img src="{{asset('assets/gallery/holi/holi-celebration-12.webp')}}" alt="Holi 1" class="size-full object-cover" />
                <div class="overlay">Holi Celebration</div>
            </a>
            <a href="{{asset('assets/gallery/holi/holi-celebration-13.webp')}}" class="glightbox gallery-item overflow-hidden h-[300px]" data-gallery="holi">
                <img src="{{asset('assets/gallery/holi/holi-celebration-13.webp')}}" alt="Holi 2" class="size-full object-cover" />
                <div class="overlay">Holi Celebration</div>
            </a>
            </div>
        </div>
    </section>
@endsection
