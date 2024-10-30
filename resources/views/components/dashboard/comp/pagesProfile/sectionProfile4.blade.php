<div class="w-full max-w-full px-3 lg-max:mt-6 xl:w-4/12">
    <div
        class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
            <div class="flex flex-wrap -mx-3">
                <div class="flex items-center w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-none">
                    <h6 class="mb-0">{{ $title }}</h6>
                </div>
                <div class="w-full max-w-full px-3 text-right shrink-0 md:w-4/12 md:flex-none">
                    <a href="javascript:;" data-target="tooltip_trigger" data-placement="top">
                        <i class="leading-normal fas fa-user-edit text-sm text-slate-400"></i>
                    </a>
                    <div data-target="tooltip"
                        class="hidden px-2 py-1 text-center text-white bg-black rounded-lg text-sm" role="tooltip">
                        Edit Profile
                        <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                            data-popper-arrow></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-auto p-4">
            <p class="leading-normal text-sm">
                {{ $bio }}
            </p>
            <hr class="h-px my-6 bg-transparent bg-gradient-to-r from-transparent via-white to-transparent" />
            <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                <li
                    class="relative block px-4 py-2 pt-0 pl-0 leading-normal bg-white border-0 rounded-t-lg text-sm text-inherit">
                    <strong class="text-slate-700">Full Name:</strong> &nbsp; {{ $fullName }}
                </li>
                <li
                    class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                    <strong class="text-slate-700">Mobile:</strong> &nbsp; {{ $mobile }}
                </li>
                <li
                    class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                    <strong class="text-slate-700">Email:</strong> &nbsp; {{ $email }}
                </li>
                <li
                    class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                    <strong class="text-slate-700">Location:</strong> &nbsp; {{ $location }}
                </li>
                <li class="relative block px-4 py-2 pb-0 pl-0 bg-white border-0 border-t-0 rounded-b-lg text-inherit">
                    <strong class="leading-normal text-sm text-slate-700">Social:</strong>
                    &nbsp;
                    @foreach ($socialLinks as $platform => $link)
                        <a class="inline-block py-0 pl-1 pr-2 mb-0 font-bold text-center transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in"
                            href="{{ $link }}">
                            <i class="fab fa-{{ $platform }} fa-lg"></i>
                        </a>
                    @endforeach
                </li>
            </ul>
        </div>
    </div>
</div>
