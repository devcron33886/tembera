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
                    <h1 class="text-2xl font-bold leading-7 text-white sm:truncate sm:text-3xl sm:tracking-tight">Blog</h1>

                </div>


            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-84 py-24">
    	<div class="bg-white overflow-hidden mr-4 ml-4">
    		<div class="mx-auto mt-4 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 text-base leading-7 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
    			@foreach($posts as $post)
    			<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    				<a href="{{ route('blog-detail',$post->slug) }}">
    					<img class="rounded-t-lg h-auto" src="{{ asset('images/tembera 250 blog header.jpg') }}" alt="" />
    				</a>
    				<div class="p-5">
    					<a href="{{ route('blog-detail',$post->slug) }}">
    						<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title}}</h5>
    					</a>
    					<p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ Str::limit($post->body,250)}}.</p>

    					<div class="px-6 pt-4 pb-2">
                            <span
                                class="inline-block bg-green-200 rounded-md px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Photography</span>
                                <span
                                    class="inline-block bg-green-200 rounded-md px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Travel</span>
                                <span
                                    class="inline-block bg-green-200 rounded-md px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Winter</span>
                            </div>
    					<a href="{{ route('blog-detail',$post->slug) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mr-2 mb-2">
    						Read more
    						<svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    					</a>
    				</div>
    			</div>
    			@endforeach
    		</div>
    		<div class="py-12 items-center">
    			{{ $posts->links() }}
    		</div>
    	</div>
    </div>
</x-app-layout>