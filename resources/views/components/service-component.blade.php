<div class="bg-gray-100 py-24 sm:py-32 p-10">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-5xl font-bold tracking-tight  text-gray-900 sm:text-4xl">Our Services</h2>
            <p class="mt-6 text-lg leading-8 text-gray-900">Our top services.</p>
        </div>
        <dl class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 text-base leading-7 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            @foreach($services as $service)
                <div>
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full"
                             src="https://images.unsplash.com/photo-1681958758179-207ff9bd9362?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60"
                             alt="Sunset in the mountains">
                        <div class="bg-white">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">{{ $service->name }}</div>
                                <p class="text-gray-700 text-base">
                                   {{ Str::limit($service->description,120) }}
                                </p>
                            </div>
                            <div class="px-6 pt-4 pb-2">
                            <span
                                class="inline-block bg-green-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Photography</span>
                                <span
                                    class="inline-block bg-green-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Travel</span>
                                <span
                                    class="inline-block bg-green-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Winter</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </dl>
    </div>
</div>
