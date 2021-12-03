@props(['post'])
<div {{ $attributes->merge(['class' => 'm-4']) }}>
    <article class="ring-1 font-sans h-full shadow-lg max-w-4xl mx-auto py-4 px-4 rounded-xl bg-white text-black">
        <div class="space-y-4">
            <h2 class="font-bold text-xl text-blue-500">
                <a href=" /posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h2>
            <h3>
                By
                <a class="text-lg text-blue-600" href="/authors/{{ $post->author->username }}">
                    {{ $post->author->username }}
                </a>
                on
                {{ $post->created_at->diffForHumans() }}
            </h3>
            Category : <a class="text-yellow-600"
                href="/?category={{ $post->category->slug }}">{{ $post->category->name }}</a>

            <p class="text-md"> {{ $post->summary }}</p>
            <div class='flex mt-auto'>
                <a class="ml-auto" href="/posts/<?= $post->slug ?>">
                    <button class='bg-blue-200  shadow-md text-blue-800 rounded px-4 py-1
                    hover:ring-2 transition hover:bg-gray-600'>
                        Read More ...
                    </button>
                </a>
            </div>
        </div>
    </article>
</div>
