<div class="w-full max-w-full px-3 xl:w-4/12">
    <div
        class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
            <h6 class="mb-0">{{ $title }}</h6>
        </div>
        <div class="flex-auto p-4">
            <h6 class="font-bold leading-tight uppercase text-xs text-slate-500">
                {{ $accountLabel }}
            </h6>
            <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                @foreach ($accountSettings as $setting)
                    <li
                        class="relative block px-0 py-2 bg-white border-0 {{ $loop->first ? 'rounded-t-lg' : '' }} text-inherit">
                        <div class="min-h-6 mb-0.5 block pl-0">
                            <input id="{{ $setting['id'] }}"
                                class="mt-0.54 rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.25 h-5 relative float-left ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right"
                                type="checkbox" {{ $setting['checked'] ? 'checked' : '' }} />
                            <label for="{{ $setting['id'] }}"
                                class="w-4/5 mb-0 ml-4 overflow-hidden font-normal cursor-pointer select-none text-sm text-ellipsis whitespace-nowrap text-slate-500">
                                {{ $setting['label'] }}
                            </label>
                        </div>
                    </li>
                @endforeach
            </ul>
            <h6 class="mt-6 font-bold leading-tight uppercase text-xs text-slate-500">
                {{ $appLabel }}
            </h6>
            <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                @foreach ($appSettings as $setting)
                    <li
                        class="relative block px-0 py-2 bg-white border-0 {{ $loop->first ? 'rounded-t-lg' : '' }} text-inherit">
                        <div class="min-h-6 mb-0.5 block pl-0">
                            <input id="{{ $setting['id'] }}"
                                class="mt-0.54 rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.25 h-5 relative float-left ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right"
                                type="checkbox" {{ $setting['checked'] ? 'checked' : '' }} />
                            <label for="{{ $setting['id'] }}"
                                class="w-4/5 mb-0 ml-4 overflow-hidden font-normal cursor-pointer select-none text-sm text-ellipsis whitespace-nowrap text-slate-500">
                                {{ $setting['label'] }}
                            </label>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
