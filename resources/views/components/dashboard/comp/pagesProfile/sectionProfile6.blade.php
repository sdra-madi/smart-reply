@props(['projects', 'title', 'description'])
<style>
    .images {
        width: 100%;
        height: 250px;
    }
</style>
<div class="flex-none w-full max-w-full px-3 mt-6">
    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-lg rounded-2xl bg-clip-border">
        <div class="p-4 pb-0 mb-0 bg-white rounded-t-2xl">
            <h6 class="mb-1 font-bold text-gray-800">{{ $title }}</h6>
            <p class="leading-normal text-sm text-gray-500">{{ $description }}</p>
        </div>
        <div class="flex-auto p-4">
            <div class="flex flex-wrap -mx-3">
                @foreach ($projects as $project)
                    <div class="w-full max-w-full px-3 mb-6 md:w-6/12 xl:w-3/12">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white border border-gray-200 shadow-md rounded-2xl bg-clip-border transition-transform hover:scale-105 hover:shadow-xl">
                            <div class="relative h-[50px]">
                                <img src="{{ $project['image'] }}" alt="img-blur-shadow"
                                    class="images w-full h-full object-cover transition-transform hover:scale-105 rounded-t-2xl" />
                            </div>

                            <div class="flex-auto p-4">
                                <a href="javascript:;" class="block mb-2">
                                    <h5 class="text-lg font-semibold text-gray-800">{{ $project['title'] }}</h5>
                                </a>
                                <p class="mb-4 text-sm text-gray-600">{{ $project['description'] }}</p>
                                <div class="flex justify-center">
                                    <button type="button"
                                        class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-hakli hover:border-fuchsia-500 hover:bg-transparent hover:text-hakli hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-hakli">
                                        {{ $project['button'] }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
