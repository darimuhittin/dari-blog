@props(['post'])
<div {{ $attributes->merge(['class' => 'm-4 space-y-10 ']) }}>
    <article class="ring-1 h-full shadow-lg max-w-4xl mx-auto py-4 px-4 rounded-xl bg-white text-black">
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
                href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>

            <p class="text-md"> {{ $post->body }}</p>

        </div>
    </article>

    <article class="ring-1 ring-gray-400 h-full shadow-xl max-w-4xl mx-auto py-4 px-4 rounded-xl bg-white text-black">
        <div class="flex">
            <div class="">
                <img class="rounded-full w-20" src="https://i.pravatar.cc/150?u={{ auth()->user()->id }}" alt=""
                    srcset="">
            </div>
            <div class="ml-4 w-full space-y-10">
                @auth
                    <form class="flex flex-col" action="/posts/{{ $post->slug }}/comments" method="POST">
                        @csrf
                        <textarea
                            class="hover:ring-2 focus:ring-2 focus:placeholder-gray-200 shadow-lg resize-none border border-gray-300 p-4 rounded-xl"
                            name="comment" id="comment" cols="30" rows="4" placeholder="Leave a comment."></textarea>
                        <input
                            class="mt-4 shadow-xl hover:ring-2 ml-auto cursor-pointer px-4 py-1 bg-blue-600 text-white font-semibold rounded-xl"
                            type="submit" value="Share">
                    </form>
                @endauth

                @foreach ($post->comments as $comment)
                    <x-comment :comment="$comment" />

                @endforeach
            </div>
        </div>
    </article>
</div>
