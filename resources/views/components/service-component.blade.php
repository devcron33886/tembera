<div class="bg-gray-50 py-24 sm:py-32 p-10">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-5xl font-bold tracking-tight  text-gray-900 sm:text-4xl">Our Services</h2>
            <p class="mt-6 text-lg leading-8 text-gray-900">We take pride in our diverse pocket-friendly travel and tour services and products that are fun packed for you and the whole family.</p>
        </div>
        <dl class="mx-auto mt-8 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-8 text-base leading-7 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            @foreach($services as $service)
                <div>
                    <div class="bg-white mb-5 rounded-xl py-5 px-7 shadow-md transition-all hover:shadow-lg sm:p-5 lg:px-6 xl:px-5">
                        <div class="mx-auto mb-7 inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                            </svg>
                        </div>
                        <div>
                            <h class="mb-4 text-xl font-bold text-black sm:text-xl lg:text-xl xl:text-xl">{{ $service->name }}
                            </h3>
                            <p class="text-base font-medium text-body-color py-6">{{Str::limit( $service->description,180)}}</p>
                        </div>
                        <div class="mt-5 flex">
                        <a href="#"
                           class="rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Read more <span aria-hidden="true">&rarr;</span></a>
                    </div>
                    </div>
                </div>
            @endforeach

        </dl>
    </div>
</div>
