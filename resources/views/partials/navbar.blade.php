<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ url('/home') }}" class="flex items-center">
                <img src="https://gcdnb.pbrd.co/images/4LUQpWQfxfra.png?o=1" width="40px" height="40px" class="mr-3" alt="maniac Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Maniac Bengkol</span>
            </a>
            <div class="flex items-center md:order-2">
                @livewire('cart.cart-counter')
                @include('partials.darkmode')
                @guest
                    @if (Route::has('login'))
                        <form action="{{ route('login') }}">
                            <button formaction="{{ route('login') }}"
                                class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                                <span
                                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    Masuk
                                </span>
                            </button>
                        </form>
                    @endif

                    @if (Route::has('register'))
                        <form action="{{ route('register') }}">
                            <button formaction="{{ route('register') }}"
                                class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
                                <span
                                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    Daftar
                                </span>
                            </button>
                        </form>
                    @endif
                @else
                    <button type="button"
                        class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                        data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full"
                        src="{{ Auth::user()->image_profile ? asset('storage/'.Auth::user()->image_profile) : asset('img/profile.png') }}"
                        alt="user photo">
                    </button>
                    <!-- Dropdown menu -->
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="user-dropdown">
                        <div class="px-4 py-3">
                            <span class="block text-sm text-gray-900 dark:text-white"> {{ Auth::user()->name }}</span>
                            <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">
                                {{ Auth::user()->email }}</span>
                            @auth
                                @if (!auth()->user()->hasVerifiedEmail())
                                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                        @csrf
                                        <button type="submit"
                                            class="btn btn-link p-0 m-0 align-baseline text-xs text-sky-500">verify your
                                            email</button>.
                                    </form>
                                @endif
                            @endauth
                        </div>
                        <ul class="py-2" aria-labelledby="user-menu-button">
                            <li>
                                <a href="{{url('/user-transaction-list')}}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                    Riwayat Transaksi </a>
                            </li>
                            {{-- <li>
                                <a href="{{ url('/booking') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                    Riwayat Booking</a>
                            </li> --}}
                           
                            <li>
                                <a href="{{ url('/profile') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                    Edit Profil</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    Keluar</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>

                @endguest

                <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                </button>

            </div>
                      
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="navigation flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 dark:text-white">
                    <li><a href="{{ url('/home') }}" class="nav-item block py-2 pl-3 pr-4 text-gray-900 dark:text-white" data-nav="beranda">Beranda</a></li>
                    {{-- <li><a href="{{ url('/articles') }}" class="nav-item block py-2 pl-3 pr-4 text-gray-900 dark:text-white" data-nav="artikel">Artikel</a></li> --}}
                    <li><a href="{{ url('/product-list') }}" class="nav-item block py-2 pl-3 pr-4 text-gray-900 dark:text-white" data-nav="daftarproduk">Daftar Produk</a></li>
                    {{-- <li><a href="{{ url('/booking') }}" class="nav-item block py-2 pl-3 pr-4 text-gray-900dark:text-white" data-nav="booking">Booking</a></li> --}}
                </ul>
            </nav>
            
        </div>

        {{-- <nav class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
            <ul
                class="navigation flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 dark:text-white">
                <li><a href="{{ url('/') }}" class="nav-item" data-nav="beranda">Beranda</a></li>
                <li><a href="{{ url('/articles') }}" class="nav-item" data-nav="artikel">Artikel</a></li>
                <li><a href="{{ url('/product-list') }}" class="nav-item" data-nav="daftarproduk">Daftar Produk</a>
                </li>
                <li><a href="{{ url('/booking') }}" class="nav-item" data-nav="booking">Booking</a></li>
            </ul>
        </nav> --}}
        

</nav>

<hr>
<hr>

</body>

<script>
    // Get all the navbar items
    const navItems = document.querySelectorAll('.nav-item');

    // Add click event listener to each navbar item
    navItems.forEach(item => {
        item.addEventListener('click', function() {
            // Remove "active" class from the previously active item
            const activeNavItem = document.querySelector('.nav-item.active');
            if (activeNavItem) {
                activeNavItem.classList.remove('active');
            }

            // Add "active" class to the clicked navbar item
            this.classList.add('active');

            // Store the active item in local storage
            const navId = this.getAttribute('data-nav');
            localStorage.setItem('activeNavItem', navId);
        });
    });

    // Check if there is an active item stored in local storage
    const storedActiveNavItem = localStorage.getItem('activeNavItem');
    if (storedActiveNavItem) {
        // Add "active" class to the stored active item
        const activeNavItem = document.querySelector(`.nav-item[data-nav="${storedActiveNavItem}"]`);
        if (activeNavItem) {
            activeNavItem.classList.add('active');
        }
    }
</script>

</html>