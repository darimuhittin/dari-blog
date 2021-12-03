<x-layout>
    @include('_header')
    <div>

        <h1>{{ isset($category) ? $category->name . ' Kategorisi' : '' }}</h1>


        @if ($posts->count() > 0)
            <div class="grid grid-cols-3">
                <x-post-card class='col-span-3' :post="$posts[0]" />

                @if ($posts->count() > 1)
                    @foreach ($posts->skip(1) as $post)
                        @if ($loop->odd)
                            <x-post-card :post="$post" />
                        @else
                            <x-post-card :post="$post" />
                        @endif

                    @endforeach
                @endif
            </div>
        @else
            <div class="flex justify-center mt-8">
                <h1 class="text-6xl text-center">
                    No posts found.
                </h1>
            </div>
        @endif
    </div>
</x-layout>
