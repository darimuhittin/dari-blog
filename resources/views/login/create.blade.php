<x-layout>
    <article>
        <section class="flex justify-center pt-20">
            <form action="/login" method="POST"
                class=" rounded-2xl space-y-2 bg-gray-200 w-1/3 px-16 py-10 flex flex-col">
                @csrf
                <h2 class="text-2xl border-b-2 border-gray-400 py-2">Login</h2>
                <div class="space-y-3 pt-4">
                    <label for="email">Email :</label>
                    <input class="w-full focus:placeholder-gray-200    focus:ring-4 px-4 py-2 rounded-full"
                        placeholder="Enter email" type="email" name="email" id="email" required>
                    @error('email')
                        <p class="text-sm text-red-600"> {{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-3 pt-4">
                    <label for="email">Password :</label>
                    <input class="w-full focus:placeholder-gray-200    focus:ring-4 px-4 py-2 rounded-full"
                        placeholder="Enter password" type="password" name="password" id="password" required>
                </div>

                <div class="space-y-3 pt-4 flex">
                    <input
                        class="ml-auto px-8 py-2 text-blue-700 border border-gray-300 cursor-pointer bg-white hover:bg-gray-200"
                        type="submit" value="Login">
                </div>


            </form>
        </section>
    </article>
</x-layout>
