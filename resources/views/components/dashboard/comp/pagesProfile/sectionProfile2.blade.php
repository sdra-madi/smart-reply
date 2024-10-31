@props([
    'fullName' => null,
    'Email' => null,
    'profilePicture' => null,
])
<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-auto max-w-full px-3">
        <div
            class="text-base ease-soft-in-out h-18.5 w-18.5 relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
            <img src="{{ asset($profilePicture) }}" alt=""
                class="border-4 border-red-500 text-base ease-soft-in-out h-18.5 w-18.5 relative text-white transition-all duration-200"
                style="border-radius: 50%;">

        </div>
    </div>
    <div class="flex-none w-auto max-w-full px-3 my-auto">
        <div class="h-full">
            <h5 class="mb-1">{{ $fullName }}</h5>
            <p class="mb-0 font-semibold leading-normal text-sm">
                {{ $Email }}
            </p>
        </div>
    </div>
</div>
