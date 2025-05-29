<header class="header px-4 sm:px-6 h-[calc(theme('spacing.header')_-_10px)] sm:h-header bg-white dark:bg-dark-card rounded-none xl:rounded-15 flex items-center mb-4 xl:m-4 group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_32px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_32px)] group-data-[sidebar-size=sm]:group-data-[theme-width=box]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[theme-width=box]:xl:mr-0 dk-theme-card-square ac-transition">
    <div class="flex-center-between grow">
        <!-- Header Left -->
        <div class="menu-hamburger-container flex-center">
            <button type="button" id="app-menu-hamburger" class="menu-hamburger hidden xl:block dk-theme-card-square"></button>
            <button type="button" class="menu-hamburger block xl:hidden dk-theme-card-square" data-drawer-target="app-drawer" data-drawer-show="app-drawer" aria-controls="app-drawer"></button>
        </div>
        <!-- Header Right -->
        <div class="flex items-center gap-5 md:gap-3">
            <!-- Dark Light Button -->
            <button type="button" class="themeMode size-8 hidden md:flex-center hover:bg-gray-200 dark:hover:bg-dark-icon rounded-md dk-theme-card-square" onclick="toggleThemeMode()">
                <i class="ri-contrast-2-line text-[22px] group-[.dark]:before:!content-['\f1bf']"></i>
            </button>
            <!-- Border -->
            <div class="w-[1px] h-header bg-gray-200 dark:bg-dark-border hidden sm:block"></div>
            <!-- User Profile Button -->
                <div class="relative">
                <button type="button" data-popover-target="dropdownProfile" data-popover-trigger="click" data-popover-placement="bottom-end" class="flex items-center">
                <img src="{{ asset('storage/' . (auth()->user()->image ?? 'default-user.png')) }}" alt="Profile Image" width="40" height="40">
                </button>       
                <!-- Dropdown menu -->
                <div id="dropdownProfile" class="invisible z-backdrop bg-white text-left divide-y divide-gray-100 rounded-lg shadow w-48 dark:bg-dark-card-shade dark:divide-dark-border-four dk-theme-card-square">
                    <div class="px-4 py-3 text-sm text-gray-500 dark:text-white">
                        <div class="card-title text-lg">{{ auth()->user()->name }}</div>
                        <div class="truncate"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8beae7eef3b9bfb9becbece6eae2e7a5e8e4e6">{{ auth()->user()->email }}</a></div>
                    </div>

                    <div class="py-2">
                        <a href="{{route('logout')}}" class="flex font-medium px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 dark:hover:bg-dark-icon dark:text-gray-200 dark:hover:text-white">Log out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
