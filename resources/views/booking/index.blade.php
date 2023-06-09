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
                    <h1 class="text-2xl font-bold leading-7 text-white sm:truncate sm:text-3xl sm:tracking-tight">Booking</h1>

                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form class="p-6 text-gray-900">
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="check-in" :value="__('Check in date')" />
                        <x-text-input id="check-in-date" class="block mt-1 w-full" type="date" name="check_in_date" :value="old('check_in_date')"  autocomplete="date" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="check-out-date" :value="__('Check-out Date')" />
                        <x-text-input id="check-out-date" class="block mt-1 w-full" type="date" name="check_out_date" :value="old('check_out_date')"  autocomplete="date" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="guests" :value="__('Number of Guests')" />
                        <x-text-input id="guests" class="block mt-1 w-full" type="number" name="guests" :value="old('guests')"  autocomplete="number" />
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
{{--     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="text-2xl mb-4">Book your stay</h2>
                    <form class="space-y-4">
                        <!-- Name -->
                        
                        <!-- Email Address -->
                        
                        
                        
                        
            
              
            </div>
            
            
            
            <div>
              <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded w-full">Book Now</button>
            </div>
          </form>
        </div>
  </div> --}}
</body>

</html>

            
        </div>
    </div>
  

</x-app-layout>