<x-guest-layout>
    <main class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form action="{{ route('skills.update', $skill->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Global error display --}}
            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                    <strong>Oops! Something went wrong:</strong>
                    <ul class="mt-2 list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <fieldset class="p-6 bg-slate-950 rounded-lg text-white">
                <div class="mb-2">
                    <label for="name" class="mx-2 my-2">Name Skill</label>
                    <input id="name" type="text" name="name" class="rounded-2xl p-2 w-full bg-slate-800 text-white mt-4" value="{{ old('name', $skill->name) }}">
                    @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="m-2 pt-3">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="rounded-2xl p-2 w-full bg-slate-800 text-white mt-4">
                    @error('image')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Optional preview of current image --}}
                @if($skill->image)
                    <div class="my-4">
                        <p class="text-sm text-gray-300 mb-1">Current Image:</p>
                        <img src="{{ asset('storage/' . $skill->image) }}" alt="Skill Image" class="h-32 rounded-md border border-gray-500">
                    </div>
                @endif

                <input type="submit" value="Update" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full mt-4">
            </fieldset>
        </form>
    </main>
</x-guest-layout>
