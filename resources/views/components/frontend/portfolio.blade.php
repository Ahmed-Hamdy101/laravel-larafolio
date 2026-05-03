@props(['skills' => [], 'projects' => []])

<div class="container mx-auto flex justify-center flex-col items-center my-12 px-4 bg-[#101726] h-full">
    <h1 class="p-2 text-2xl text-white"> My Last Work</h1>
    <p class="p-2 text-white">
        lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    </p>

    <nav class="mb-12 transition-all duration-300 ease-in-out" aria-label="Tabs" role="tablist">
        <ul class="flex py-4 mt-4 overflow-x-auto overflow-y-hidden md:justify-center dark:border-gray-700">
            @foreach($skills as $skill)
                <button
                    type="button"
                    class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-hidden focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 dark:focus:text-blue-500"
                    id="{{ Str::slug($skill->name) }}"
                    aria-selected="false"
                    data-hs-tab="#{{ Str::slug($skill->name) }}"
                    aria-controls="{{ Str::slug($skill->name) }}"
                    role="tab">
                    {{ strtoupper($skill->name) }}
                </button>
            @endforeach
        </ul>
    </nav>

    <div class="container grid grid-cols-1 xl:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 space-x-2 gap-2">
        <x-frontend.project :projects="$projects" />
    </div>
</div>
