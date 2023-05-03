<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style type="text/css">
        body {
            font-family: 'Rubik', sans-serif !important;
        }
    </style>
</head>
<body class="font-sans text-gray-900 antialiased">
<header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="{{ route('welcome.index')}}" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-16 w-auto" src="{{ asset('images/logo.png')}}"
                     alt="">
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                     aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="/" class="text-sm font-semibold leading-6 text-white">Home</a>

            <a href="{{ route('about.index')}}" class="text-sm font-semibold leading-6 text-white">About us</a>

            <a href="#" class="text-sm font-semibold leading-6 text-white">Services</a>

            <a href="#" class="text-sm font-semibold leading-6 text-white">Booking</a>

        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="#"
               class="rounded-md bg-blue-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-400">Contact
                us<span
                    aria-hidden="true">  →</span></a>
        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-50"></div>
        <div
            class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-white/10">
            <div class="flex items-center justify-between">
                <a href="{{ route('welcome.index')}}" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="{{ asset('images/logo.png') }}"
                         alt="">
                </a>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-400">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                         aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/25">
                    <div class="space-y-2 py-6">
                        <a href="#"
                           class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Product</a>

                        <a href="#"
                           class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Features</a>

                        <a href="#"
                           class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Marketplace</a>

                        <a href="#"
                           class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Company</a>
                    </div>
                    <div class="py-6">
                        <a href="#"
                           class="rounded-md bg-blue-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-400">Read
                            more<span
                                aria-hidden="true">  →</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="relative isolate overflow-hidden bg-gray-900 pt-14 ">
    <img
        src="{{ asset('images/tembera banner.jpeg')}}"
        alt="" class="absolute inset-0 -z-10 h-full w-full object-cover" style="opacity: 0.3 !important;">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
         aria-hidden="true">
        <div
            class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
        <div class="hidden sm:mb-8 sm:flex sm:justify-center">
            <div
                class="relative bg-green-800 rounded-full px-3 py-1 text-md leading-6 text-white ring-1 ring-white/10 hover:ring-white/20">
                Announcing our next Event. <a href="#" class="font-semibold text-white"><span
                        class="absolute inset-0" aria-hidden="true"></span> Read more <span
                        aria-hidden="true">&rarr;</span></a>
            </div>
        </div>
        <div class="text-center">
            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Welcome to {{ config('app.name')}}</h1>
            <p class="mt-6 text-lg leading-8 text-white">Anim aute id magna aliqua ad ad non deserunt sunt. Qui
                irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="#"
                   class="rounded-md bg-blue-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-400">Read
                    more<span
                        aria-hidden="true">  →</span></a>

            </div>
        </div>
    </div>
    <div
        class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
        aria-hidden="true">
        <div
            class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
</div>
<x-about-component/>
<x-service-component/>
<div class="overflow-hidden bg-white py-32">
    <div class="mx-auto max-w-7xl px-6 lg:flex lg:px-8">
        <div
            class="mx-auto grid max-w-2xl grid-cols-1 gap-x-12 gap-y-16 lg:mx-0 lg:min-w-full lg:max-w-none lg:flex-none lg:gap-y-8">
            <div class="lg:col-end-1 lg:w-full lg:max-w-lg lg:pb-8">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Ready to travel with us?</h2>
                <p class="mt-6 text-xl leading-8 text-gray-600">Book your next trip with Tembera 250.</p>

                <div class="mt-10 flex">
                    <a href="#"
                       class="rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Book
                        Now <span aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
            <div class="flex flex-wrap items-start justify-end gap-6 sm:gap-8 lg:contents">
                <div class="w-0 flex-auto lg:ml-auto lg:w-auto lg:flex-none lg:self-end">
                    <img src="{{ asset('images/tembera 250  with visit bigogwe.jpg')}}" alt=""
                         class="aspect-[7/5] w-[37rem] max-w-none rounded-2xl bg-gray-50 object-cover">
                </div>
                <div
                    class="contents lg:col-span-2 lg:col-end-2 lg:ml-auto lg:flex lg:w-[37rem] lg:items-start lg:justify-end lg:gap-x-8">
                    <div class="order-first flex w-64 flex-none justify-end self-end lg:w-auto">
                        <img src="{{ asset('images/tembera 250 first episode.jpeg')}}" alt=""
                             class="aspect-[4/3] w-[24rem] max-w-none flex-none rounded-2xl bg-gray-50 object-cover">
                    </div>
                    <div class="flex w-96 flex-auto justify-end lg:w-auto lg:flex-none">
                        <img src="{{ asset('images/hiking bisoke.jpeg')}}" alt=""
                             class="aspect-[7/5] w-[37rem] max-w-none flex-none rounded-2xl bg-gray-50 object-cover">
                    </div>
                    <div class="hidden sm:block sm:w-0 sm:flex-auto lg:w-auto lg:flex-none">
                        <img src="{{ asset('images/tembera 250 with twin lake.jpeg')}}" alt=""
                             class="aspect-[4/3] w-[24rem] max-w-none rounded-2xl bg-gray-50 object-cover">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<x-blog-component/>
<x-testimonial-Component/>
<x-footer-component/>
</body>
</html>
