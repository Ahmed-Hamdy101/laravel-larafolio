<x-guest-layout>
    <h1 class="text-2xl font-bold text-start text-white mb-4 ms-20 ">{{__('Skills')}}</h1>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex flex-col justify-center">
            <div class="flex justify-end m-2 p-2">
                <a href="{{route('skills.create')}}"
                   class="py-2 px-4 bg-red-600 hover:bg-indigo-500 rounded-lg text-white">+</a>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg ">

                <table class="w-full text-sm text-left bg-slate-950">
                    <thead class="text-xs text-white uppercase shadow-none ripple">
                    <tr>
                        <th scope="col" class="px-6 py-3">Skills SKU</th>
                        <th scope="col" class="px-6 py-3">Skills Name</th>
                        <th scope="col" class="px-6 py-3">IMAGE</th>
                        <th scope="col" class="px-6 py-3 text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white shadow-2xl">
                    @forelse($skills as $skill)
                    <tr>
                        <td class="px-6 pypy-4">{{ $skill->id }}</td>
                        <td class="px-6 py-4"> {{ $skill->name }}</td>
                        <td class="px-6 py-4"><img src="{{ asset('storage/' . $skill->image) }}" class="w-10 h-10"></td>
                        <td class="px-6 py-4 grid grid-cols-2 text-center">
                            <a href="{{route('skills.edit',$skill->id )}}" class="bg-red-500 text-white rounded-full h-6 w-3/4 shadow-2xl focus:bg-red-700">Edit</a>
                            <form action="{{ route('skills.destroy', $skill->id) }}" method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this skill?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="bg-green-500 text-white rounded-full h-6 w-3/4 shadow-2xl focus:bg-green-800">
                                    Delete
                                </button>
                            </form>                        </td>
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
