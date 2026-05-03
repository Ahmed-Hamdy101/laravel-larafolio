<x-guest-layout>
    <h1 class="text-2xl font-bold text-start text-white mb-4 ms-20 ">{{__('Project')}}</h1>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex flex-col justify-center">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('project.create') }}"
                   class="py-2 px-4 bg-slate-950 rounded-lg text-white">+</a>
            </div>
            @if(session('success-u'))
                <div id="toast-success"
                     class="fixed bottom-5 right-5 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow
           dark:text-gray-400 dark:bg-gray-800 animate-hide">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
                        ✅
                    </div>
                    <div class="ml-3 text-sm font-normal">
                        updated successfully
                    </div>
                </div>

            @endif
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg ">

                <table class="w-full text-sm text-left bg-slate-950">
                    <thead class="text-xs text-white uppercase shadow-none ripple text-center">
                    <tr>
                        <th scope="col" class="px-6 py-3">Project SKU</th>
                        <th scope="col" class="px-6 py-3">Project Name</th>
                        <th scope="col" class="px-6 py-3">Project Skills</th>
                        <th scope="col" class="px-6 py-3">Project URL</th>
                        <th scope="col" class="px-6 py-3">IMAGE</th>
                        <th scope="col" class="px-6 py-3 text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white shadow-2xl ">
                    @forelse( $projects as $project)
                    <tr class="d-flex justify-center align-items-center text-center">
                        <td>
                            {{$project->id}}
                        </td>
                        <td>
                            {{$project->name}}
                        </td>
                        <td>
                            {{$project->skill->name}}
                        </td>
                        <td>
                            {{$project->project_url}}
                        </td>
                        <td>
                            <img src=" {{ asset( 'storage/' . $project->image) }} "  alt="project" class="w-10 h-10"/>
                        </td>
                        <td class="px-6 py-4 grid grid-cols-2 text-center">
                            <a href="{{route('project.edit',$project->id )}}" class="bg-red-500 text-white rounded-full h-6 w-3/4 shadow-2xl focus:bg-red-700">Edit</a>
                            <form action="{{ route('project.destroy', $project->id) }}" onclick="preventDefault().form.submit()" method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this project?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="bg-green-500 text-white rounded-full h-6 w-3/4 shadow-2xl focus:bg-green-800">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td class=""> <h2> No Project Founded </h2></td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-guest-layout>
