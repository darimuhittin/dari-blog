@props(['comment'])
<div class="comment flex justify-end items-center">

    @if ($comment->user_id === auth()->user()->id)
        <form action="/posts/{{ $comment->post->slug }}/comments/{{ $comment->id }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <input class="cursor-pointer bg-red-700 text-white px-4 py-1 rounded-xl mr-4" type="submit" value="Delete">
        </form>
    @endif
    <div class="flex border  border-gray-400  rounded-2xl p-4 shadow-xl">
        <div class="w-full">
            <p>{{ $comment->body }}</p>
        </div>
    </div>

    <div class=" flex-shrink-0 flex flex-col items-center ml-3">
        <img class="rounded-full w-20 shadow-xl" src="https://i.pravatar.cc/150?u={{ $comment->user_id }}" alt=""
            srcset="">
        <a class="text-blue-600 hover:underline"
            href="/authors/{{ $comment->author->username }}">{{ $comment->author->username }}</a>
    </div>
</div>
