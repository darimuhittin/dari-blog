<div class="pb-16  grid justify-items-center">
    <div class="w-2/3 flex justify-center space-x-10">
        <x-category-dropdown />
        <form action="#" method="GET">
            <input
                class="border border-gray-800 h-full px-4 placeholder-gray-400 focus:placeholder-gray-100
            focus:ring-2 rounded-full"
                type="text" name="search" placeholder="Search something..." value="{{ request('search') ?? '' }}">
        </form>
    </div>
</div>
