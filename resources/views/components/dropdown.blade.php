@props(['items'])
<div x-data="{open: true}" class="relative text-white">
    <button @click="open=!open" {{ $attributes->merge(['class' => 'relative  min-w-48 flex items-center']) }}>
        {{ $slot }}
        <i class="pl-4 right-0 bottom-0 ml-auto fas fa-chevron-down"></i>
    </button>
    <div x-show="open" @click.outside="open = false"
        class="text-black w-full max-h-60 overflow-auto absolute ring-1 bg-white rounded-lg mt-1">
        <ul class="text-left">
            {{ $items }}
        </ul>
    </div>
</div>
