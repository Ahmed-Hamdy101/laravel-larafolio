<x-guest-layout>

        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 p-6 p-6 bg-slate-950 rounded-lg text-white">
        <div class="flex flex-col justify-center">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('project.index') }}"
                   class="py-2 px-2 bg-white text-black hover:text-white hover:bg-red-500 rounded-lg  e">Back</a>
            </div>
            <div class="relative overflow-x-auto  sm:rounded-lg ">
                <form  action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <fieldset class="text-white">
                    {{--    Project Name     --}}
                    <div class="mb-4 text-white">
                        <label for="name" class="block py-3">Project Name</label>
                        <input type="text" name="name" id="name" required
                               class="rounded-2xl p-2 w-full bg-slate-800 text-white mt-4">
                    </div>
                        {{--    Project URL     --}}
                    <div class="mb-4 text-white">
                        <label for="project_url" class="block py-3">Project url</label>
                        <input type="url" name="project_url" id="project_url"
                               class="rounded-2xl p-2 w-full bg-slate-800 text-white mt-4">
                    </div>
                          {{--    Skills ID     --}}
                        <div class="mb-4 py-5">
                            <label for="skill_id" class="block mb-2 text-sm font-medium text-white">Select Skill</label>
                            <select name="skill_id" id="skill_id" class="rounded-2xl p-2 w-full bg-slate-800 text-white mt-4">
                                @foreach ($skills as $skill)
                                    <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                                @endforeach
                            </select>
                        </div>


                    <div class="mb-4 py-5">
                        <label for="image" class="block text-sm font-medium  py-3">Upload Image</label>
                        <input type="file" name="image" id="image" accept="image/*" required
                               class="rounded-2xl p-2 w-full bg-slate-800 text-white mt-4 ">
                    </div>
                    <button type="submit"
                            class="py-2 px-2 bg-white text-black hover:text-white hover:bg-red-500 rounded-lg  float-end">Store
                    </button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    </x-guest-layout>
