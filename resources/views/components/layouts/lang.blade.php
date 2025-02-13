
<x-dropdown>
    <x-slot name="trigger">
        <div>
            <span class="text-white text-2xl bg-gray-600 p-3 rounded-xl hover:cursor-pointer+">
                {{config("languages")[App::getLocale()]['name']}}
                {{config("languages")[App::getLocale()]['flag']}}
            </span>
        </div>
    </x-slot>
    <x-slot name="content">
        @foreach(config("languages") as $code=>$lang)
            <span class="flex flex-row space-x-2">
                <a href="{{route("language",$code)}}">
                    {{$lang['name']}}
                    {{$lang['flag']}}
                </a>
            </span>
        @endforeach
    </x-slot>
</x-dropdown>
