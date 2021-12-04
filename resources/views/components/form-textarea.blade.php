@props(['name','type','value'])
<div class="flex justify-between items-start">
    <label class="flex-shrink-0" for="{{ $name }}"> {{ Str::ucfirst($name) . " :" }}</label>
    <textarea class="w-2/3 rounded-xl ml-20 resize-none p-4" name="{{ $name }}" id="{{ $name }}" cols="28" rows="5" {{ $attributes }}>{{ $value }}</textarea>
</div>
