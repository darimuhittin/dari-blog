<div x-data="{open: false}">
    <button @click="open=!open"
        class="border border-gray-800 relative focus:ring-4  bg-white px-10 py-2 min-w-48 rounded-full">
        <i class="fas fa-book-open left-0 absolute transform translate-x-2/3 translate-y-1/3"></i>
        @if (isset($currentCategory))
            {{ $currentCategory->name }}
        @else
            Categories
        @endif
        <i class="right-0 bottom-0 transform -translate-y-2/3 -translate-x-2/3 absolute ml-auto fas fa-chevron-down"></i>
    </button>
    <div x-show="open" @click.outside="open = false"
        class="max-h-60  overflow-auto absolute w-48 ring-2 bg-white rounded-lg mt-2">
        <ul class="text-left">
            @foreach ($categories as $category)
                <li class="flex hover:bg-gray-400 focus:bg-gray-400 cursor-pointer rounded-lg">
                    <a class="w-full h-full px-6 py-1 "
                        href="/?category={{ $category->slug }}">{{ $category->name }}</a>
                </li>
            @endforeach
            {{-- <li class="hover:bg-gray-400 px-6 py-1 cursor-pointer">
                        <a href="#">Two</a>
                    </li>
                    <li class="hover:bg-gray-400 px-6 py-1 cursor-pointer rounded-b-lg">
                        <a href="#">Three</a>
                    </li> --}}
        </ul>
    </div>
</div>
