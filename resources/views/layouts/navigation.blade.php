<header class="absolute inset-x-0 top-0 z-50">
    <nav x-data="{ open: false }" class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="{{ route('welcome.index')}}" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-16 w-auto" src="{{ asset('images/logo.png')}}"
                     alt="">
            </a>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="/" class="text-sm font-semibold leading-6 text-white">Home</a>
            <a href="{{ route('about.index')}}" class="text-sm font-semibold leading-6 text-white">About us</a>
            <a href="{{ route('services.index') }}" class="text-sm font-semibold leading-6 text-white">Services</a>
            <a href="{{ route('booking.index') }}" class="text-sm font-semibold leading-6 text-white">Booking</a>
            <a href=" {{ route('blog.index') }}" class="text-sm font-semibold leading-6 text-white">Blog</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="{{ route('contact.index') }}" class="rounded-md bg-blue-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-400">Contactus<span aria-hidden="true">  →</span></a>
        </div>
        <div class="flex lg:hidden">
            <button type="button" @click="open = !open" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                    <path x-show="open" fill-rule="evenodd" clip-rule="evenodd" d="M9.293 10L4.146 4.854a1 1 0 1 1 1.414-1.414L10 8.586l4.439-4.439a1 1 0 0 1 1.414 1.414L11.707 10l4.146 4.146a1 1 0 1 1-1.414 1.414L10 11.414l-4.439 4.439a1 1 0 1 1-1.414-1.414L8.293 10z"></path>
                </svg>
            </button>
        </div>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div x-show="open" class="lg:hidden" role="dialog" aria-modal="true">
            
            <div class="fixed inset-0 z-50"></div>
            <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-white/10">
                <div class="flex items-center justify-between">
                    <a href="{{ route('welcome.index')}}" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto" src="{{ asset('images/logo.png') }}" alt="">
                    </a>
                    <button @click="open = !open" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-400">
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
                            <a href="/" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Home</a>
                            <a href="{{ route('about.index') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">About us</a>

                            <a href="{{ route('services.index') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Services</a>

                            <a href="{{ route('booking.index') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Booking</a>
                            <a href="{{ route('blog.index') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Blog</a>
                        </div>
                        <div class="py-6">
                            <a href="{{ route('contact.index') }}" class="rounded-md bg-blue-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-400"> Contact us<span aria-hidden="true">  →</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
    </nav>  
</header>