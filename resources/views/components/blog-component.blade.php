<div class="py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">From the blog</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">We have different articles about different places you can
                visit in a country of a thousand hills.</p>
        </div>
        <dl class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 text-base leading-7 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            @foreach($posts as $post)
                <div>
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        @if($post->featured_image)
                        <img class="w-full"
                             src="{{ $post->featured_image->getUrl('preview') }}"
                             alt="Sunset in the mountains">
                             @endif
                        <div class="bg-white">
                            <div class="px-6 py-4">
                                <div class="font-bold text-md mb-2"><a
                                        href="{{ route('blog-detail',$post->slug) }}"> {{ $post->title }}</a></div>

                            </div>
                            <div class="px-6 pt-4 pb-2">
                                @foreach($post->tags as $key => $item)
                                <span
                                class="inline-block bg-green-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $item->name }}</span>
                                @endforeach   
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </dl>
    </div>
</div>
