@props(['name','type','value'])
<div class="flex justify-between items-start">
    <label for="{{ $name }}"> {{ Str::ucfirst($name) . " :" }}</label>
    <input class="w-1/3 px-4 py-1 rounded-xl ml-8"
    type="{{ $type }}" name="{{ $name }}" placeholder="Enter a {{ Str::ucfirst($name) }}" value="{{ $value }}">
</div>
