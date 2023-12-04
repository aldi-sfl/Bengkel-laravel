<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>

    @extends('layouts.app')

    @section('content')
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16">
                <div class="flex flex-col justify-center">
                    <h1
                        class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                        Servis kendaraanmu dengan cepat dan berkualitas ada disini</h1>

                    <section class="home">
                        <div class="home-text ">
                            <p class="animate-text ease-in-out duration-700">
                                <span>Berkualitas</span>
                                <span>Terbaik</span>
                                <span>Terjangkau</span>
                            </p>
                        </div>
                    </section>

                    <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                        <a href="{{ url('/product-list') }}"
                            class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                            Belanja Sekarang
                            <svg aria-hidden="true" class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="#"
                            class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
                            type="button" data-drawer-target="drawer-contact" data-drawer-show="drawer-contact"
                            aria-controls="drawer-contact">
                            Chat
                        </a>
                    </div>
                </div>


                <div id="gallery" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://media.istockphoto.com/id/1210309025/id/video/mekanik-di-blue-overalls-adalah-unscrewing-lug-nuts-dengan-kunci-pas-dampak-pneumatik-tukang.jpg?s=640x640&k=20&c=JYI4BtgKu0g1Ciy-G_mi0q9VwPDpj6z5GDhFgdzYpl4="
                                class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <img src="https://media.istockphoto.com/id/1210309432/id/video/cuplikan-potret-mekanik-tampan-yang-sedang-mengerjakan-kendaraan-di-mobil-dinas-tukang.jpg?s=640x640&k=20&c=_l0zGeixbCb6Auchj2NAyvw815pAzzbRHB6XF_wGJ4k="
                                class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://media.istockphoto.com/id/1210306897/id/video/manajer-memeriksa-data-di-komputer-tablet-dan-menjelaskan-perincian-ke-mekanik-karyawan.jpg?s=640x640&k=20&c=FYNQKdeF8DJfS4aFz5qLrrLLOYwhIkjgmwOwogxSe-E="
                                class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="">
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://media.istockphoto.com/id/1210305638/id/video/cuplikan-potret-mekanik-tampan-yang-sedang-mengerjakan-kendaraan-di-mobil-dinas-tukang.jpg?s=640x640&k=20&c=37zc5Lg_CibY8lXwS-qdyegMUBrPRt-hxeb7HdNjHWk="
                                class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="">
                        </div>
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                                </path>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
        </section>

        <section class="py-16">
            <div class="container mx-auto px-2">
                <h2 style="text-align: center;" class="text-4xl font-extrabold mb-10 dark:text-white">Mengapa Harus Di
                    Maniac Bengkol?</h2>

                <div class="mt-4 grid grid-cols-1 gap-4 sm:mt-5 sm:grid-cols-3 sm:gap-5 lg:mt-6 lg:gap-6">
                    <div
                        class="flex max-w-xl flex-col items-start justify-between dark:bg-gray-700 rounded-lg shadow-md p-6">
                        <img style="margin: auto; padding-top: 40px;" width="150" height="200"
                            src="https://microsite.otoklix.com/assets/icons/transparency.svg" alt="">
                        <div class="px-4 py-6">
                            <h4 style="text-align: center; font-size: 30px;" class="font-bold mb-2 dark:text-white">Aman
                            </h4>
                            <p style="text-align: center; font-size: 20px;" class="mb-2 dark:text-white">Semua mitra yang
                                terdaftar sudah
                                dilakukan pengecekan kualitas.</p>
                        </div>
                    </div>


                    <div
                        class="flex max-w-xl flex-col items-start justify-between dark:bg-gray-700 rounded-lg shadow-md p-6">
                        <img style="margin: auto; padding-top: 40px;" width="150" height="200"
                            src="https://microsite.otoklix.com/assets/icons/money.svg" alt="">
                        <div class="px-4 py-6">
                            <h4 style="text-align: center; font-size: 30px;" class="font-bold mb-2 dark:text-white">Harga
                                Terjangkau</h4>
                            <p style="text-align: center; font-size: 20px;" class="mb-2 dark:text-white">Bisa tahu harga
                                sebelum datang
                                ke bengkel.</p>
                        </div>
                    </div>

                    <div
                        class="flex max-w-xl flex-col items-start justify-between dark:bg-gray-700 rounded-lg shadow-md p-6">
                        <img style="margin: auto; padding-top: 40px;" width="150" height="200"
                            src="https://microsite.otoklix.com/assets/icons/tool.svg" alt="">
                        <div class="px-4 py-6">
                            <h4 style="text-align: center; font-size: 30px;" class="font-bold mb-2 dark:text-white">
                                Garansi hingga 14 Hari
                            </h4>
                            <p style="text-align: center; font-size: 20px;" class="mb-2 dark:text-white">Terdapat garansi
                                14 hari
                                setelah servis.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- <h2 style="text-align: center;" class="text-4xl font-extrabold mb-10 dark:text-white">Apa kata mereka?</h2>
        <div class="container mx-auto px-2">
            <div class="flex gap-4 sm:card-width-50 md:card-width-75 lg:card-width-100">
                @foreach (json_decode($userReview) as $item)
                    <div class="w-1/3 shadow-lg rounded-lg overflow-hidden dark:bg-gray-700">
                        <img style="margin: auto;" class="w-50" src="{{ $item->image }}" alt="">
                        <div class="px-4 py-6">
                            <h4 style="text-align: center;" class="text-2xl font-bold mb-5 mt-3 dark:text-white">
                                {{ $item->name }}</h4>
                            <p style="text-align: center;" class="mb-4 dark:text-white">
                                {{ $item->occupation }}
                            </p>
                            <div style="justify-content:center;" class="flex">
                                @for ($i = 0; $i < $item->rate; $i++)
                                    <svg aria-hidden="true" class="w-10 h-10 text-yellow-400" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>First star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                @endfor
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div> --}}

        <div id="drawer-contact"
            class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-1/3 dark:bg-gray-800"
            tabindex="-1" aria-labelledby="drawer-contact-label">
            
            <button type="button" data-drawer-hide="drawer-contact" aria-controls="drawer-contact"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close menu</span>
            </button>

            {{-- <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                <a href="#" class="hover:underline">contact@maniacbengkol.com</a>
            </p>
            <p class="text-sm text-gray-500 dark:text-gray-400">
                <a href="#" class="hover:underline"></a>021-456-7890</a>
            </p> --}}
           
            {{-- <a href="{{ route('login') }}">Login</a> --}}
            
        <div class="w-full p-4 text-center bg-white  sm:p-8 dark:bg-gray-800 dark:border-gray-700">
            <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Customer service</h5>
            <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">untuk dapat menggunakan layanan customer service kami, kamu harus login terlebih dahulu.</p>
            <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                <a href="{{ route('login') }}" class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                    {{-- <svg class="mr-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="apple" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"></path></svg> --}}
                    <svg class="mr-3 w-7 h-7" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path fill="currentColor" d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"/></svg>
                    <div class="text-left">
                        
                        <div class=" font-sans text-sm font-semibold">Login sekarang</div>
                    </div>
                </a>
            </div>
        </div>

        
        
            
        </div>
        {{-- ceck --}}
        {{-- <section class="py-12">
            <div class="container mx-auto px-2">
                <h2 style="text-align: center;" class="text-4xl font-extrabold mb-5 dark:text-white">Artikel Terbaru</h2>
                <div class="flex gap-10">
                    <div
                        class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                        @foreach ($articles as $item)
                            <article
                                class="flex max-w-xl flex-col items-start justify-between bg-white rounded-lg shadow-md p-6">
                                <div class="flex items-center gap-x-4 text-xs">
                                    <time datetime="2020-03-16" class="text-gray-500">
                                        {{ $item->created_at->format('d M Y') }}
                                    </time>
                                </div>
                                <div class="group relative">
                                    <h3
                                        class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                        <a href="{{ route('articles.show', $item) }}">
                                            <span class="absolute inset-0"></span>
                                            {{ $item->title }}
                                        </a>
                                    </h3>
                                    <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
                                        {{ $item->body }}
                                    </p>
                                </div>
                                <div class="relative mt-8 flex items-center gap-x-4">
                                    <img src="{{ asset('img/creator_article.jpg') }}" alt=""
                                        class="h-10 w-10 rounded-full bg-gray-50">
                                    <div class="text-sm leading-6">
                                        <p class="font-semibold text-gray-900">
                                            <a href="#">
                                                <span class="absolute inset-0"></span>
                                                {{ $item->author }}
                                            </a>
                                        </p>
                                        <p class="text-gray-600">Creator</p>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </section> --}}

        <section class="py-20">
            <div class="container mx-auto px-2">
                <h2 style="text-align: center;" class="text-4xl font-extrabold mb-10 dark:text-white">
                    lokasi kami
                </h2>
                <div class="justify-center flex">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15825.197449719015!2d109.28002777951659!3d-7.432087950968882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655fc5fd2563ff%3A0x380e92389461dcf7!2sBengkel%20Mobil%2088%20Pak%20Naryo!5e0!3m2!1sid!2sid!4v1686057591689!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>

        <section class="py-20">
            <div class="container mx-auto px-2">
                <h2 style="text-align: center;" class="text-4xl font-extrabold mb-10 dark:text-white">Butuh bantuan?
                    Silahkan hubungi kami
                </h2>
                <div class="flex gap-10">
                    <a href="#" style="margin: auto;"
                        class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900"
                        type="button" data-drawer-target="drawer-contact" data-drawer-show="drawer-contact"
                        aria-controls="drawer-contact">
                        Hubungi Kami
                        <svg aria-hidden="true" class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>



        <script>
            const txts = document.querySelector(".animate-text").children,
                txtsLen = txts.length;
            let index = 0;
            const textInTimer = 3000,
                textOutTimer = 2800;

            function animateText() {
                for (let i = 0; i < txtsLen; i++) {
                    txts[i].classList.remove("text-in", "text-out");
                }
                txts[index].classList.add("text-in");

                setTimeout(function() {
                    txts[index].classList.add("text-out");
                }, textOutTimer)

                setTimeout(function() {

                    if (index == txtsLen - 1) {
                        index = 0;
                    } else {
                        index++;
                    }
                    animateText();
                }, textInTimer);
            }

            window.onload = animateText;
        </script>

        <div id="gallery" class="relative w-full py-5" data-carousel="slide">
            @if (session('success'))
                <div id="toast-success"
                    class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 drop-shadow-lg border-solid-2 fixed bottom-5 right-5"
                    role="alert">
                    <div
                        class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Check icon</span>
                    </div>
                    <div class="ml-3 text-sm font-normal">{{ session('success') }}</div>
                    <button type="button"
                        class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                        data-dismiss-target="#toast-success" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            @endif
        </div>
    @endsection

</body>

</html>
