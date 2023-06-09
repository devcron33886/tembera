<x-app-layout>
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
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Our core values</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">We are a customer oreinted traveling company with the following core values.</p>
        </div>
        <dl class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 text-base leading-7 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            <div>
                <dt class="font-semibold text-gray-900">Excellence</dt>
                <dd class="mt-1 text-gray-600">We strive to understand the needs of the customers and ensure we have the right people, services, and products to meet those needs.
                </dd>
            </div>

            <div>
                <dt class="font-semibold text-gray-900">Reliable</dt>
                <dd class="mt-1 text-gray-600">We are consistent and keen to deliver what we promise.
                </dd>
            </div>

            <div>
                <dt class="font-semibold text-gray-900">Passionate</dt>
                <dd class="mt-1 text-gray-600">We love people and what we do. Our culture is based on a positive attitude, enthusiasm, and going the extra mile.
                </dd>
            </div>

            <div>
                <dt class="font-semibold text-gray-900">Accountability</dt>
                <dd class="mt-1 text-gray-600">We keep our commitments and speak up when we no longer believe we can meet the agreed commitments. We also taking ownership of our shortcomings.
                </dd>
            </div>

            <div>
                <dt class="font-semibold text-gray-900">Empathy</dt>
                <dd class="mt-1 text-gray-600">We actively listen, observe, and act on our customers, local community, local government, and nature's needs.
                </dd>
            </div>

            <div>
                <dt class="font-semibold text-gray-900">Integrity</dt>
                <dd class="mt-1 text-gray-600">We are guided by the law, both locally and in the travel industry. We observe our organization’s policies and processes.
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
            <h2 class="text-center text-lg font-semibold leading-8 text-gray-900">Our trusted partners.</h2>
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
</x-app-layout>

