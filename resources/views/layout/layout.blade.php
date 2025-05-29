<!DOCTYPE html>
<html lang="en" class="group light" data-sidebar-size="lg" data-card-style="square">
    @include('admin.includes.head')
<body class="bg-body-light dark:bg-dark-body group-data-[theme-width=box]:container group-data-[theme-width=box]:max-w-screen-3xl xl:group-data-[theme-width=box]:px-4">

    {{-- Optional Loader --}}
    {{--
    <div id="loader" class="w-screen h-screen flex-center bg-white dark:bg-dark-card fixed inset-0 z-[9999]">
        <img src="{{ asset('assets/images/loader.gif') }}" alt="loader">
    </div>
    --}}

    <!-- Start Header -->
    @include('admin.includes.header')
    <!-- End Header -->

    <!-- Start Sidebar -->
    @include('admin.includes.sidebar')
    <!-- End Sidebar -->

    <!-- Main Content Area -->
    <div class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] px-4 group-data-[theme-width=box]:xl:px-0 ac-transition">
        <div class="grid grid-cols-12 gap-x-4">
            <!-- Start Bread Crumb Section -->
            <div class="col-span-full card flex justify-between items-center">
                <h5 class="card-title">Admin</h5>
                <ul class="flex items-center flex-wrap gap-1.5 leading-none text-gray-900 dark:text-dark-text mt-2">
                    {{-- <li class="text-primary-500 after:font-remix after:flex-center after:font-thin after:text-gray-900 after:size-5 after:content-['\ea6d'] after:translate-y-[1.4px] last:after:hidden [&.current-page]:text-gray-500 dark:[&.current-page]:text-dark-text-two">
                        <a href="index.html">Home</a>
                    </li> --}}
                    <li class="text-primary-500 after:font-remix after:flex-center after:font-thin after:text-gray-900 after:size-5 after:content-['\ea6d'] after:translate-y-[1.4px] last:after:hidden [&.current-page]:text-gray-500 dark:[&.current-page]:text-dark-text-two current-page">
                        <a href="#">Admin Dashboard</a>
                    </li>
                </ul>
            </div>
            <!-- End Bread Crumb Section -->

            <!-- Start Short Progress Card Section -->
            <div class="col-span-full card">
                <!-- Overall revenue Progress Card -->
                @yield('content')
                <!-- Total registrations Progress Card -->
            </div>
            <!-- End Short Progress Card Section -->
        </div>
    </div>

    <!-- Footer -->
    @include('admin.includes.footer')

</body>
</html>
