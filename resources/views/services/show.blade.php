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
                    <h2 class="text-2xl font-bold leading-7 text-white sm:truncate sm:text-3xl sm:tracking-tight">{{ $service->name}}</h2>  
                </div>

            </div>
        </div>
    </div>
    <div class="mx-auto max-w-7xl px-6 lg:px-8 py-24">

    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full lg:w-1/3 px-4 mb-8 lg:mb-0">
            	@if($service->featured_image)
                <img class="w-full rounded-lg shadow-lg" src="https://images.unsplash.com/photo-1524368535928-5b5e00ddc76b" alt="Concert Image">
                @endif
            </div>
            <div class="w-full lg:w-2/3 px-4">
                <h1 class="text-4xl font-bold mb-4">{{ $service->name}}</h1>
                <p class="text-lg mb-6">{!! $service->description!!}</p>
                <div class="mb-6">
                    <p class="text-xl font-bold mb-2">When:</p>
                    <p class="text-lg">Friday, April 15th at 8:00 PM</p>
                </div>
                <div class="mb-6">
                    <p class="text-xl font-bold mb-2">Where:</p>
                    <p class="text-lg">The Fillmore Auditorium</p>
                    <p class="text-lg">1805 Geary Blvd, San Francisco, CA</p>
                </div>
                <div class="mb-6">
                    <p class="text-xl font-bold mb-2">Tickets:</p>
                    <p class="text-lg">$35 - General Admission</p>
                    <p class="text-lg">$75 - VIP</p>
                </div>
                <button
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="button">
                   Book now
                </button>
            </div>
        </div>
    </div>

    	
    </div>

</x-app-layout>