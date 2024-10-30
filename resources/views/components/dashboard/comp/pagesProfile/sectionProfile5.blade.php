<div class="w-full max-w-full px-3 lg-max:mt-6 xl:w-4/12">
    <div
        class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
            <h6 class="mb-0">Conversations</h6>
        </div>
        <div class="flex-auto p-4">
            <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                @foreach ($conversations as $conversation)
                    <li class="relative flex items-center px-0 py-2 mb-2 bg-white border-0 rounded-t-lg text-inherit">
                        <div
                            class="inline-flex items-center justify-center w-12 h-12 mr-4 text-white transition-all duration-200 text-base ease-soft-in-out rounded-xl">
                            <img src="{{ $conversation['image'] }}" alt="{{ $conversation['name'] }}"
                                class="w-full shadow-soft-2xl rounded-xl" />
                        </div>
                        <div class="flex flex-col items-start justify-center">
                            <h6 class="mb-0 leading-normal text-sm">{{ $conversation['name'] }}</h6>
                            <p class="mb-0 leading-tight text-xs">
                                {{ $conversation['message'] }}
                            </p>
                        </div>
                        <a class="inline-block py-3 pl-0 pr-4 mb-0 ml-auto font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in hover:scale-102 hover:active:scale-102 active:opacity-85 text-hakli hover:text-fuchsia-800 hover:shadow-none active:scale-100"
                            href="javascript:;">Reply</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
