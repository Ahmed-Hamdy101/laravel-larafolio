<x-guest-layout>

    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 p-6 p-6 bg-slate-950 rounded-lg text-white">
        <div class="flex flex-col justify-center">

            <div class="relative overflow-x-auto  sm:rounded-lg ">

                <form  action="{{ route('project.update',$project->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <fieldset class="text-white">

                        {{--    Project Name     --}}
                        <div class="mb-4 text-white">
                            <label for="name" class="block py-3">Project Name</label>
                            <input type="text" name="name" id="name"  value="{{$project->name}}"
                                   class="rounded-2xl p-2 w-full bg-slate-800 text-white mt-4">
                            @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                {{--  Image--}}
                        <div class="m-2 pt-3">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="rounded-2xl p-2 w-full bg-slate-800 text-white mt-4">
                            @error('image')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    {{--    Project URL     --}}
                    <div class="mb-4 text-white">
                        <label for="project_url" class="block py-3">Project url</label>
                        <input type="url" name="project_url" id="project_url"
                               class="rounded-2xl p-2 w-full bg-slate-800 text-white mt-4" value="{{$project->project_url}}">
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


                        <input type="submit" value="Edit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full mt-4">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
