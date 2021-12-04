@props(['header'])
<div class="w-2/3 mx-auto space-y-2">
    <h1 class="text-4xl">{{ $header ?? 'Admin Panel' }}</h1>
    <hr>
    <div class="flex">
        <div class="w-40">
            <ul class="font-semibold">
                <li class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">
                    <a href="/admin/posts">All Posts</a>
                </li>
                <li class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">
                    <a href="/admin/posts/create">New Post</a>
                </li>
            </ul>
        </div>
        <div class="w-2/3">
            {{ $slot }}
        </div>
    </div>
</div>
