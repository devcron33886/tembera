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
                    <h1 class="text-2xl font-bold leading-7 text-white sm:truncate sm:text-3xl sm:tracking-tight">About us</h1>

                </div>


            </div>
        </div>

    </div>

    <!-- Hero section -->
    <x-about-component/>

    <!-- Image section -->
    <div class="mt-12 sm:mt-40 xl:mx-auto xl:max-w-7xl xl:px-8">
        <img
            src="{{ asset('images/about tembera 250.jpeg') }}" alt="" class="aspect-[5/2] w-full object-cover xl:rounded-3xl">
    </div>

    <!-- Values section -->
    <div class="mx-auto mt-32 max-w-7xl px-6 sm:mt-40 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Our values</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">Lorem ipsum dolor sit amet consect adipisicing elit.
                Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.</p>
        </div>
        <dl class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 text-base leading-7 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            <div>
                <dt class="font-semibold text-gray-900">Be world-class</dt>
                <dd class="mt-1 text-gray-600">Aut illo quae. Ut et harum ea animi natus. Culpa maiores et sed sint
                    et magnam exercitationem quia. Ullam voluptas nihil vitae dicta molestiae et. Aliquid velit
                    porro vero.
                </dd>
            </div>

            <div>
                <dt class="font-semibold text-gray-900">Share everything you know</dt>
                <dd class="mt-1 text-gray-600">Mollitia delectus a omnis. Quae velit aliquid. Qui nulla maxime
                    adipisci illo id molestiae. Cumque cum ut minus rerum architecto magnam consequatur. Quia
                    quaerat minima.
                </dd>
            </div>

            <div>
                <dt class="font-semibold text-gray-900">Always learning</dt>
                <dd class="mt-1 text-gray-600">Aut repellendus et officiis dolor possimus. Deserunt velit quasi sunt
                    fuga error labore quia ipsum. Commodi autem voluptatem nam. Quos voluptatem totam.
                </dd>
            </div>

            <div>
                <dt class="font-semibold text-gray-900">Be supportive</dt>
                <dd class="mt-1 text-gray-600">Magnam provident veritatis odit. Vitae eligendi repellat non. Eum
                    fugit impedit veritatis ducimus. Non qui aspernatur laudantium modi. Praesentium rerum error
                    deserunt harum.
                </dd>
            </div>

            <div>
                <dt class="font-semibold text-gray-900">Take responsibility</dt>
                <dd class="mt-1 text-gray-600">Sit minus expedita quam in ullam molestiae dignissimos in harum.
                    Tenetur dolorem iure. Non nesciunt dolorem veniam necessitatibus laboriosam voluptas
                    perspiciatis error.
                </dd>
            </div>

            <div>
                <dt class="font-semibold text-gray-900">Enjoy downtime</dt>
                <dd class="mt-1 text-gray-600">Ipsa in earum deserunt aut. Quos minus aut animi et soluta. Ipsum
                    dicta ut quia eius. Possimus reprehenderit iste aspernatur ut est velit consequatur distinctio.
                </dd>
            </div>
        </dl>
    </div>

    <!-- Logo cloud -->
    <div class="relative isolate -z-10 mt-32 sm:mt-48 pb-24">
        <div
            class="absolute inset-x-0 top-1/2 -z-10 flex -translate-y-1/2 justify-center overflow-hidden [mask-image:radial-gradient(50%_45%_at_50%_55%,white,transparent)]">
            <svg class="h-[40rem] w-[80rem] flex-none stroke-gray-200" aria-hidden="true">
                <defs>
                    <pattern id="e9033f3e-f665-41a6-84ef-756f6778e6fe" width="200" height="200" x="50%" y="50%"
                             patternUnits="userSpaceOnUse" patternTransform="translate(-100 0)">
                        <path d="M.5 200V.5H200" fill="none"/>
                    </pattern>
                </defs>
                <svg x="50%" y="50%" class="overflow-visible fill-gray-50">
                    <path d="M-300 0h201v201h-201Z M300 200h201v201h-201Z" stroke-width="0"/>
                </svg>
                <rect width="100%" height="100%" stroke-width="0"
                      fill="url(#e9033f3e-f665-41a6-84ef-756f6778e6fe)"/>
            </svg>
        </div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h2 class="text-center text-lg font-semibold leading-8 text-gray-900">Trusted by the world’s most
                innovative teams</h2>
            <div
                class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                     src="https://tailwindui.com/img/logos/158x48/transistor-logo-gray-900.svg" alt="Transistor"
                     width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                     src="https://tailwindui.com/img/logos/158x48/reform-logo-gray-900.svg" alt="Reform" width="158"
                     height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                     src="https://tailwindui.com/img/logos/158x48/tuple-logo-gray-900.svg" alt="Tuple" width="158"
                     height="48">
                <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1"
                     src="https://tailwindui.com/img/logos/158x48/savvycal-logo-gray-900.svg" alt="SavvyCal"
                     width="158" height="48">
                <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1"
                     src="https://tailwindui.com/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic"
                     width="158" height="48">
            </div>
        </div>
    </div>


    <!-- Blog section -->
    <x-blog-component/>

</main>

<!-- Footer -->
<x-footer-component/>

