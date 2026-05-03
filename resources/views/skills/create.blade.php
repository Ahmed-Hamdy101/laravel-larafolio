<x-guest-layout>
    <main class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form action="{{route('skills.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <fieldset class="p-6 bg-slate-950 rounded-lg text-white ">
                <div class="mb-2">
                    <label for="name" class="mx-2 my-2">Name Skill</label>
                    <input type="text" name="name" id="" class="rounded-2xl p-2 w-full bg-slate-800 text-white mt-4" required>
                </div>
                <div class="m-2 pt-3">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="" class="rounded-2xl p-2 w-full bg-slate-800 text-white mt-4" required>
                </div>
                <input type="submit" value="Create Skill" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
            </fieldset>
        </form>
    </main>
</x-guest-layout>
