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

<main class="isolate">
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
                <a href="{{ route('contact.index') }}"
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
    <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
        <img src="{{ asset('images/tembera 250 blog header.jpg') }}" alt=""
             class="absolute inset-0 -z-10 h-full w-full object-cover" style="opacity: 0.5 !important;">
        <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl"
             aria-hidden="true">
            <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                 style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div
            class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu"
            aria-hidden="true">
            <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                 style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8 py-24">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="min-w-0 flex-1">
                    <h1 class="text-2xl font-bold leading-7 text-white sm:truncate sm:text-3xl sm:tracking-tight">
                        Contact us</h1>

                </div>


            </div>
        </div>

    </div>
    <div class="relative isolate bg-white">
        <div class="mx-auto grid max-w-7xl grid-cols-1 lg:grid-cols-2">
            <div class="relative px-6 pb-20 pt-24 sm:pt-32 lg:static lg:px-8 lg:py-48">
                <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg">
                    <div
                        class="absolute inset-y-0 left-0 -z-10 w-full overflow-hidden bg-gray-100 ring-1 ring-gray-900/10 lg:w-1/2">
                        <svg
                            class="absolute inset-0 h-full w-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
                            aria-hidden="true">
                            <defs>
                                <pattern id="83fd4e5a-9d52-42fc-97b6-718e5d7ee527" width="200" height="200" x="100%"
                                         y="-1" patternUnits="userSpaceOnUse">
                                    <path d="M130 200V.5M.5 .5H200" fill="none"/>
                                </pattern>
                            </defs>
                            <rect width="100%" height="100%" stroke-width="0" fill="white"/>
                            <svg x="100%" y="-1" class="overflow-visible fill-gray-50">
                                <path d="M-470.5 0h201v201h-201Z" stroke-width="0"/>
                            </svg>
                            <rect width="100%" height="100%" stroke-width="0"
                                  fill="url(#83fd4e5a-9d52-42fc-97b6-718e5d7ee527)"/>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900">Get in touch</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-600">Proin volutpat consequat porttitor cras nullam
                        gravida at. Orci molestie a eu arcu. Sed ut tincidunt integer elementum id sem. Arcu sed
                        malesuada et magna.</p>
                    <dl class="mt-10 space-y-4 text-base leading-7 text-gray-600">
                        <div class="flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Telephone</span>
                                <svg class="h-7 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z"/>
                                </svg>
                            </dt>
                            <dd>545 Mavis Island<br>Chicago, IL 99191</dd>
                        </div>
                        <div class="flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Telephone</span>
                                <svg class="h-7 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                                </svg>
                            </dt>
                            <dd><a class="hover:text-gray-900" href="tel:+1 (555) 234-5678">+1 (555) 234-5678</a></dd>
                        </div>
                        <div class="flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Telephone</span>
                                <svg class="h-7 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                                </svg>
                            </dt>
                            <dd><a class="hover:text-gray-900" href="mailto:hello@example.com">hello@example.com</a>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
            <form action="#" method="POST" class="px-6 pb-24 pt-20 sm:pb-32 lg:px-8 lg:py-48">
                <div class="mx-auto max-w-xl lg:mr-0 lg:max-w-lg">
                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                        <div>
                            <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">First
                                name</label>
                            <div class="mt-2.5">
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                       class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Last
                                name</label>
                            <div class="mt-2.5">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                       class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                            <div class="mt-2.5">
                                <input type="email" name="email" id="email" autocomplete="email"
                                       class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="phone-number" class="block text-sm font-semibold leading-6 text-gray-900">Phone
                                number</label>
                            <div class="mt-2.5">
                                <input type="tel" name="phone-number" id="phone-number" autocomplete="tel"
                                       class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="message"
                                   class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
                            <div class="mt-2.5">
                                <textarea name="message" id="message" rows="4"
                                          class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 flex justify-end">
                        <button type="submit"
                                class="rounded-md bg-blue-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
                            Send message
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!-- Blog section -->
    <x-blog-component/>

</main>

<!-- Footer -->
<x-footer-component/>

