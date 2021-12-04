<x-layout>
    <x-admin.panel :header="$header?? null">
        <section>
            <form action="/admin/posts/{{ $post->id }}" method="post">
                @csrf
                @method('patch')
                    <div class="space-y-4">
                        <x-form-input type='text' name='title' :value="$post->title"/>
                        <x-form-textarea type='text' name='summary' :value="$post->summary"/>
                        <x-form-textarea type='text' name='body' :value="$post->body"/>
                        <div class="flex">
                            <label for="x">Category :</label>
                            <select class="w-1/3 ml-auto rounded-xl px-4 py-1" name="category_id" id="category_id">

                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id === $post->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach

                        </select>
                        </div>
                        <x-form-submit>Save </x-form-submit>
                    </div>
            </form>
        </section>

    </x-admin.panel>
</x-layout>
