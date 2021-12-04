<div class="flex text-xl bg-gray-800 shadow-lg mb-24 ">
    <a href="/" class="text-white text-shadow-md float-left my-auto ml-4 pr-6">BLOG</a>
    <div class="mr-auto ml-4 flex">
{{--
        <ul class="mx-auto flex items-center text-white text-center">
            <li class="hover:bg-gray-200 cursor-pointer  w-40 flex hover:text-black">
                <a class="mx-auto h-full w-full px-2 py-2" href="/">Home</a>
            </li>
            <li class="hover:bg-gray-200 cursor-pointer  w-40 flex hover:text-black">
                <a class="mx-auto h-full w-full px-2 py-2" href="#">About</a>
            </li>
            <li class="hover:bg-gray-200 cursor-pointer  w-40 flex hover:text-black">
                <a class="mx-auto h-full w-full px-2 py-2" href="#">Me</a>
            </li>
        </ul> --}}
    </div>


    <ul class="flex items-center ml-auto mr-8 px-8">
        @auth
            <x-dropdown>
                <p class="text-sm">Welcome back {{ auth()->user()->name }}</p>
                <img class="rounded-full shadow-xl h-10 ml-4" src="https://i.pravatar.cc/150?u={{ auth()->user()->id }}"
                    alt="" srcset="">
                </li>
                <x-slot name="items">
                    <x-admin.dropdown-item :active="request()->is('admin/posts')" title="All Posts" href="/admin/posts" />

                    <x-admin.dropdown-item :active="request()->is('admin/posts/create')" title="New Post" href="/admin/posts/create" />


                    <li class="">
                        <a href="#" class="text-left block hover:bg-blue-400 px-4 py-1 w-full" x-data="{}"
                            @click.prevent="document.querySelector('#logout-form').submit()">Logout</a>
                    </li>

                    <form action="/logout" method="POST" hidden id="logout-form">
                        @csrf
                    </form>
                </x-slot>
            </x-dropdown>

            <li>
                <form action="/logout" method="POST">
                    @csrf
                    <input class="bg-transparent text-red-500 font-semibold cursor-pointer   px-4 py-0.25" type="submit"
                        value="Logout">
                </form>
            </li>
        @endauth
        @guest

            <li>
                <a class="hover:underline px-4 py-1 text-white" href="/login">Login</a>
            </li>
            <li>
                <a class="hover:underline hover:bg-yellow-200 hover:text-black hover:ring-2 border border-geay-100 rounded-full text-green-700 px-4 py-0.25    bg-yellow-400"
                    href="/register">Register</a>
            </li>
        @endguest
    </ul>
</div>
