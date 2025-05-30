<header class=" group-[]/nav:bg-white lg:mt-0 mt-2 group-[]/nav:mt-0 border-b border-transparent group-[]/nav:border-gray-200 group-[]/nav:shadow-sm group-[]/nav:fixed group-[]/nav:animate-fixed-nav bg-transparent z-[999] fixed top-0 w-full">
    <div class="container xl:px-[18px] md:px-4 px-3.5 mx-auto z-50">
        <!-- topbar -->
        <div class="lg:flex hidden group-[]/nav:hidden py-3.5 px-3 justify-between items-center">
            <div class="flex items-center gap-2.5">
                <a href="tel:+91-8050500796" class="text-[14px] text-white transition-all duration-300 ease-in-out hover:text-theme2 border-r pr-2.5 border-gray-400">+91-8050500796</a>
                <a href="tel:+91-8874067025" class="text-[14px] text-white transition-all duration-300 ease-in-out hover:text-theme2 border-r pr-2.5 border-gray-400">+91-8874067025</a>
                <a href="telto:info@logicvineinfotech.com" class="text-[14px] text-white transition-all duration-300 ease-in-out hover:text-theme2">info@logicvineinfotech.com</a>
            </div>
            <div class="flex items-center gap-4">
                <a target="_blank" href="https://www.facebook.com/logicvine" class="text-white transition-all duration-300 ease-in-out text-[14px] hover:-translate-y-1 hover:text-theme2 block"><i class="fa-brands fa-facebook-f"></i></a>
                <a target="_blank" href="https://www.instagram.com/logicvineinfotech/" class="text-white transition-all duration-300 ease-in-out text-[14px] hover:-translate-y-1 hover:text-theme2 block"><i class="fa-brands fa-instagram"></i></a>
                <a target="_blank" href="https://www.linkedin.com/company/logicvine-infotech/" class="text-white transition-all duration-300 ease-in-out text-[14px] hover:-translate-y-1 hover:text-theme2 block"><i class="fa-brands fa-linkedin-in"></i></a>
                <a target="_blank" href="https://in.pinterest.com/logicvineinfotech/" class="text-white transition-all duration-300 ease-in-out text-[14px] hover:-translate-y-1 hover:text-theme2 block"><i class="fa-brands fa-pinterest-p"></i></a>
            </div>
        </div>
        <div class="bg-white lg:py-0.5 sm:py-4 py-3.5 lg:px-5 px-3 group-[]/nav:px-0 rounded-xl">
            <div class="flex items-center justify-between relative">
                <a href="{{ route('web.index') }}" class="md:h-9 h-8">
                    <!-- <img class="h-full block group-[]/nav:hidden" src="{{ asset('assets/img/logo-white-1.png') }}" alt="logo" /> -->
                    <img class="h-full" src="{{ asset('assets/img/logo-black.png') }}" alt="logo" />
                </a>
                <div class="flex items-center gap-5">
                    <ul class="lg:flex gap-8 hidden">
                        <li class="group py-6">
                            <a href="{{ route('web.index') }}"
                                class="flex items-center text-[15px] font-medium text-black relative
                                before:absolute before:border-b-2 before:border-theme2 focus:text-theme2 active:text-theme2
                                before:size-full before:-translate-x-full overflow-hidden hover:before:translate-x-0 before:duration-300
                                hover:text-theme2 {{ Route::currentRouteName() == 'web.index' ? '!text-theme2' : '' }}">
                                Home
                            </a>
                        </li>
                        <li class="group py-6 relative">
                            <a href="#"
                                class="flex items-center text-[15px] font-medium group-hover:text-theme2 text-black transition-all duration-300
                                {{ request()->routeIs('web.about-us', 'web.our-gallery') ? 'text-theme2' : '' }}">
                                Company
                                <span class="*:size-4 mt-0.5 ml-0.5 group-hover:[transform:rotateX(210deg)] transition-all duration-500">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="5" width="9" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="m112 184 144 144 144-144"></path>
                                    </svg>
                                </span>
                            </a>
                            <div class="absolute min-w-56 opacity-0 invisible group-hover:visible group-hover:opacity-100 group-hover:top-full bg-gray-100 rounded-md shadow-xl top-[130%] left-0 z-20 transition-all duration-300">
                                <ul>
                                    <li>
                                        <a href="{{ route('web.about-us') }}"
                                            class="block py-2.5 px-4 text-sm border-b transition-all duration-300
                                            {{ request()->routeIs('web.about-us') ? 'text-theme2 bg-gray-200' : 'hover:text-theme2 hover:bg-theme2 hover:text-white' }}">
                                            About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('web.our-gallery') }}"
                                            class="block py-2.5 px-4 text-sm transition-all duration-300
                                            {{ request()->routeIs('web.our-gallery') ? 'text-theme2 bg-gray-200' : 'hover:text-theme2 hover:bg-theme2 hover:text-white' }}">
                                            Life@Logicvine
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="group py-6 relative">
                            <a href="#"
                                class="flex items-center text-[15px] font-medium group-hover:text-theme2 text-black transition-all duration-300
                                {{ request()->routeIs('web-development', 'mobile-app-development', 'software-development', 'ecommerce-development') ? 'text-theme2' : '' }}">
                                Services
                                <span class="*:size-4 mt-0.5 ml-0.5 group-hover:[transform:rotateX(210deg)] transition-all duration-500">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="5" width="9" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="m112 184 144 144 144-144"></path>
                                    </svg>
                                </span>
                            </a>
                            <div class="absolute min-w-56 opacity-0 invisible group-hover:visible group-hover:opacity-100 group-hover:top-full bg-gray-100 rounded-md shadow-xl top-[130%] left-0 z-20 transition-all duration-300">
                                <ul>
                                    <li>
                                        <a href="{{ route('web-development') }}"
                                            class="block py-2.5 px-4 text-sm border-b transition-all duration-300
                                            {{ request()->routeIs('web-development') ? 'text-theme2 bg-gray-200' : 'hover:text-theme2 hover:bg-theme2 hover:text-white' }}">
                                            Web Development
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('mobile-app-development') }}"
                                            class="block py-2.5 px-4 text-sm border-b transition-all duration-300
                                            {{ request()->routeIs('mobile-app-development') ? 'text-theme2 bg-gray-200' : 'hover:text-theme2 hover:bg-theme2 hover:text-white' }}">
                                            Mobile App Development
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('software-development') }}"
                                            class="block py-2.5 px-4 text-sm border-b transition-all duration-300
                                            {{ request()->routeIs('software-development') ? 'text-theme2 bg-gray-200' : 'hover:text-theme2 hover:bg-theme2 hover:text-white' }}">
                                            Software Development
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('ecommerce-development') }}"
                                            class="block py-2.5 px-4 text-sm transition-all duration-300
                                            {{ request()->routeIs('ecommerce-development') ? 'text-theme2 bg-gray-200' : 'hover:text-theme2 hover:bg-theme2 hover:text-white' }}">
                                            eCommerce
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="group py-6">
                            <a href="{{ route('web.blog') }}"
                                class="flex items-center text-[15px] font-medium 2xl:text-base duration-300 3xl:text-lg text-black relative
                                before:absolute before:border-b-2 before:border-theme2 focus:text-theme2 active:text-theme2
                                before:size-full before:-translate-x-full overflow-hidden hover:before:translate-x-0 before:duration-300
                                hover:text-theme2 {{ Route::currentRouteName() == 'web.blog' ? '!text-theme2' : '' }}">
                                Blog
                            </a>
                        </li>
                        <li class="group py-6">
                            <a href="{{ route('web.carrier') }}"
                                class="flex items-center text-[15px] font-medium 2xl:text-base duration-300 3xl:text-lg text-black relative
                                before:absolute before:border-b-2 before:border-theme2 focus:text-theme2 active:text-theme2
                                before:size-full before:-translate-x-full overflow-hidden hover:before:translate-x-0 before:duration-300
                                hover:text-theme2 {{ Route::currentRouteName() == 'web.carrier' ? '!text-theme2' : '' }}">
                                <img src="{{asset('assets/img/carrier-icon.svg')}}" alt="carrier" class="h-[18px] mr-1">
                                Carrier
                            </a>
                        </li>
                        <li class="group py-6">
                            <a href="{{ route('web.contact-us') }}"
                                class="flex items-center text-[15px] font-medium 2xl:text-base 3xl:text-lg duration-300 text-black relative
                                before:absolute before:border-b-2 before:border-theme2 focus:text-theme2 active:text-theme2
                                before:size-full before:-translate-x-full overflow-hidden hover:before:translate-x-0 before:duration-300
                                hover:text-theme2 {{ Route::currentRouteName() == 'web.contact-us' ? '!text-theme2' : '' }}">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="flex">
                    <a href="tel:+91-8050500796" class="hidden border items-center py-1 rounded-[7px] px-2.5 bg-[#ffffff0f] gap-2 border-gray-300">
                        <span class=" bg-gray-300 fill-black p-1.5 rounded-[5px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 22 22">
                                <path d="M21.4233 16.9723L16.9701 14.0025C16.4049 13.6286 15.6474 13.7516 15.2296 14.2851L13.9324 15.953C13.8518 16.0593 13.7355 16.133 13.6049 16.1605C13.4743 16.1879 13.3382 16.1674 13.2215 16.1026L12.9748 15.9666C12.1568 15.5207 11.139 14.9656 9.08843 12.9143C7.03782 10.863 6.48163 9.84441 6.03578 9.02794L5.90048 8.78119C5.8348 8.66457 5.81347 8.52814 5.84042 8.39704C5.86736 8.26593 5.94077 8.14897 6.04712 8.06771L7.71384 6.77093C8.24713 6.35309 8.37031 5.59578 7.9969 5.03048L5.02713 0.577286C4.64443 0.00163523 3.87664 -0.171172 3.28419 0.184969L1.42202 1.30357C0.836918 1.64754 0.407665 2.20464 0.224235 2.85811C-0.446327 5.30138 0.0581298 9.51809 6.26973 15.7304C11.2109 20.6712 14.8894 21.9999 17.4178 21.9999C17.9997 22.0024 18.5792 21.9267 19.141 21.7748C19.7946 21.5916 20.3517 21.1623 20.6955 20.5771L21.8152 18.716C22.1719 18.1234 21.9992 17.3552 21.4233 16.9723ZM21.1835 18.3398L20.0663 20.202C19.8194 20.6244 19.4187 20.935 18.9481 21.0687C16.6925 21.688 12.7519 21.175 6.78849 15.2117C0.825106 9.24827 0.312228 5.308 0.931488 3.05209C1.06539 2.58083 1.37635 2.17961 1.7993 1.93237L3.66147 0.815229C3.91853 0.660553 4.25177 0.735528 4.41783 0.985329L6.03106 3.40733L7.38507 5.43814C7.54722 5.68334 7.49394 6.01198 7.26262 6.19343L5.59552 7.49021C5.08818 7.87814 4.9433 8.58007 5.25566 9.13716L5.38804 9.37768C5.85662 10.2371 6.43918 11.3062 8.56606 13.4327C10.6929 15.5592 11.7617 16.1418 12.6207 16.6104L12.8616 16.7431C13.4186 17.0554 14.1206 16.9106 14.5085 16.4032L15.8053 14.7361C15.9868 14.5049 16.3153 14.4517 16.5606 14.6137L21.0134 17.5834C21.2634 17.7494 21.3384 18.0828 21.1835 18.3398ZM12.4659 3.66805C15.9066 3.67187 18.6949 6.4602 18.6988 9.90091C18.6988 10.1034 18.8629 10.2675 19.0654 10.2675C19.2679 10.2675 19.432 10.1034 19.432 9.90091C19.4278 6.05538 16.3114 2.93901 12.4659 2.9348C12.2634 2.9348 12.0993 3.09893 12.0993 3.30142C12.0993 3.50392 12.2634 3.66805 12.4659 3.66805Z"></path>
                                <path d="M12.4653 5.86759C14.6916 5.87021 16.4957 7.67433 16.4983 9.90062C16.4983 9.99786 16.5369 10.0911 16.6057 10.1599C16.6744 10.2286 16.7677 10.2672 16.8649 10.2672C16.9622 10.2672 17.0554 10.2286 17.1242 10.1599C17.1929 10.0911 17.2315 9.99786 17.2315 9.90062C17.2285 7.26951 15.0963 5.13735 12.4653 5.13434C12.2628 5.13434 12.0986 5.29847 12.0986 5.50096C12.0986 5.70346 12.2628 5.86759 12.4653 5.86759Z"></path>
                                <path d="M12.4653 8.06738C13.4772 8.06859 14.2972 8.88863 14.2985 9.90059C14.2985 9.99783 14.3371 10.0911 14.4058 10.1598C14.4746 10.2286 14.5679 10.2672 14.6651 10.2672C14.7623 10.2672 14.8556 10.2286 14.9243 10.1598C14.9931 10.0911 15.0317 9.99783 15.0317 9.90059C15.0301 8.48385 13.882 7.33573 12.4653 7.33414C12.2628 7.33414 12.0986 7.49827 12.0986 7.70076C12.0986 7.90326 12.2628 8.06738 12.4653 8.06738Z"></path>
                            </svg>
                        </span>
                        <span class="flex flex-col">
                            <span class="text-[12px] text-gray-600 font-medium">Any Question</span>
                            <span class="text-[13px] text-black font-semibold">+91-805 050 0796</span>
                        </span>
                    </a>
                    <a href="{{ route('web.contact-us') }}" class="border-2 lg:flex hidden border-theme2 group text-[15px] text-theme2 py-3 px-6 rounded-[10px] font-medium relative overflow-hidden before:content=[''] before:top-0 before:left-0 before:w-[50%] before:duration-300 before:h-0 before:absolute before:bg-theme2 hover:before:h-full before:content=[''] after:bottom-0 after:right-0 after:w-[50%] after:duration-300 after:h-0 after:absolute after:bg-theme2 hover:after:h-full">
                        <span class="relative group-hover:text-white duration-300 z-10"><i class="fa-solid fa-headset mr-2"></i>Request a Quote</span>
                    </a>
                    <button onclick="toggleMenu()" class="text-white focus:outline-none lg:hidden flex">
                        <span id="menu-icon" class="relative block sm:w-7 w-[24px] h-5 cursor-pointer transition-all ease-in-out">
                            <span class="absolute top-0 w-full h-[2.5px] rounded-[2px] left-0 bg-gray-700 transition-all ease-in-out transform" id="top-line"></span>
                            <span class="absolute top-2 w-full h-[2.5px] rounded-[2px] left-0 bg-gray-700 transition-all ease-in-out" id="middle-line"></span>
                            <span class="absolute top-4 w-full h-[2.5px] rounded-[2px] left-0 bg-gray-700 transition-all ease-in-out transform" id="bottom-line"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- header offcanvas -->
<div id="offcanvas-menu" class="fixed inset-0 z-[1050] -translate-x-full backdrop-blur-md bg-gray-800 bg-opacity-50 transition-all duration-300 ease-in-out" onclick="closeMenuOnOverlay(event)">
    <div class="fixed top-0 left-0 w-[320px] h-full bg-gradient-to-b from-gray-950 to-theme1 shadow-lg transform transition-transform duration-300" onclick="event.stopPropagation()">
        <div class="flex items-center justify-between p-4 border-b-gray-800 border-b">
            <div class="h-8">
                <img class="h-full" src="{{ asset('assets/img/logo-white-1.png') }}" alt="logo" />
            </div>
            <button class="text-2xl text-gray-400" onclick="closeMenu()">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="p-4">
            <div class="flex flex-col w-full gap-y-5">
                <a href="{{ route('web.index') }}" class="text-sm font-medium text-gray-50">Home</a>
                <a href="{{ route('web.about-us') }}" class="text-sm font-medium text-gray-50">About Us</a>
                <div class="relative flex flex-col gap-y-3">
                    <input class="peer/mm hidden" type="checkbox" name="mmMenu" id="mmcompany">
                    <label for="mmcompany" class="flex items-center gap-x-[2px] text-sm font-medium text-gray-50">
                        Company
                        <svg class="h-5 w-5 ml-auto flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path>
                        </svg>
                    </label>
                    <div class="w-full peer-checked/mm:block hidden mt-1">
                        <div class="grid grid-cols-1 flex-wrap w-full gap-4 pl-2">
                            <a href="{{ route('web.about-us') }}" class="block font-medium text-[13px] text-gray-200">About Us</a>
                            <a href="{{ route('web.our-gallery') }}" class="block font-medium text-[13px] text-gray-200">Life@logicvine</a>
                        </div>
                    </div>
                </div>
                <div class="relative flex flex-col gap-y-3">
                    <input class="peer/mm hidden" type="checkbox" name="mmMenu" id="mmServices">
                    <label for="mmServices" class="flex items-center gap-x-[2px] text-sm font-medium text-gray-50">
                        Services
                        <svg class="h-5 w-5 ml-auto flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path>
                        </svg>
                    </label>
                    <div class="w-full peer-checked/mm:block hidden mt-1">
                        <div class="grid grid-cols-1 flex-wrap w-full gap-4 pl-2">
                            <a href="{{ route('web-development') }}" class="block font-medium text-[13px] text-gray-200">Web Development</a>
                            <a href="{{ route('mobile-app-development') }}" class="block font-medium text-[13px] text-gray-200">Mobile App Development</a>
                            <a href="{{ route('software-development') }}" class="block font-medium text-[13px] text-gray-200">Software Development</a>
                            <a href="{{ route('ecommerce-development') }}" class="block font-medium text-[13px] text-gray-200">eCommerce</a>
                        </div>
                    </div>
                </div>
                <a href="{{ route('web.blog') }}" class="text-sm font-medium text-gray-50">Blogs</a>
                <a href="{{ route('web.contact-us') }}" class="text-sm font-medium text-gray-50">Contact Us</a>
                <a href="{{ route('web.contact-us') }}" class="text-sm font-medium text-gray-50">Request a Quote</a>
            </div>
        </div>
    </div>
</div>
