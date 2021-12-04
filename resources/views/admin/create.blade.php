<x-layout>
    <x-admin.panel :header="$header?? null">

        <section>
            <form action="/admin/posts/store" method="post">
                @csrf
                <div class="space-y-4">
                    <x-form-input type='text' name='title' :value="old('title')" />
                    @error('title')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                    <x-form-input type='text' name='slug' :value="old('slug')"/>
                    @error('slug')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror

                    <x-form-textarea type='text' name='summary' :value="old('summary')" />
                    @error('summary')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                    <x-form-textarea type='text' name='body' :value="old('body')"/>
                    @error('body')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                    <div class="flex">
                        <label for="x">Category :</label>
                        <select class="w-1/3 ml-auto rounded-xl px-4 py-1" name="category_id" id="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"> {{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('category_id')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
                    <x-form-submit>Add </x-form-submit>
                </div>
            </form>
        </section>
    </x-admin.panel>
</x-layout>
