@props(['title', 'active'])

<li class="">
    <a {{ $attributes }} class="block hover:bg-blue-400 px-4 py-1 w-full {{ $active ? 'bg-blue-400 ' : '' }}">
        {{ $title }}
    </a>
</li>
