<x-layout>
    <div class="w-2/3 mx-auto space-y-2">
        <h1 class="text-4xl">All Posts</h1>
        <hr>
        <div class="flex">
            <div class="w-40">
                <ul class="font-semibold">
                    <li class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">
                        <a href="/admin/posts">All Posts</a>
                    </li>
                    <li class="{{ request()->is('admin/posts/edit') ? 'text-blue-500' : '' }}">
                        <a href="/admin/posts/edit">Edit Post</a>
                    </li>
                </ul>
            </div>
            <div class="w-2/3">
                Edit page
            </div>
        </div>
    </div>
</x-layout>
