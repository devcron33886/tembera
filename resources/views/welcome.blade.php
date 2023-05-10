<x-app-layout>
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
                    Announcing our next Event. <a href="{{ route('events') }}"
                                                  class="font-semibold text-white"><span
                            class="absolute inset-0" aria-hidden="true"></span> Read more <span
                            aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Welcome
                    to {{ config('app.name')}}</h1>
                <p class="mt-6 text-lg leading-8 text-white">Let's travel to conserve our
                    nature. {{ config('app.name') }} is your best choice traveling company in domestic tourism because
                    they don't send you there they take you there.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="{{ route('about.index') }}"
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
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Ready to travel with
                        us?</h2>
                    <p class="mt-6 text-xl leading-8 text-gray-600">Book your next trip with {{ config('app.name') }}.</p>

                    <div class="mt-10 flex">
                        <a href="{{ route('booking.index') }}"
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
</x-app-layout>

