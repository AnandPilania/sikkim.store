<a href="{{ route($link, $store->slug) }}"
   class="block py-3 text-small @if(request()->routeIs($link)) bg-gray-800 @else group hover:bg-gray-700 transition ease-in-out duration-200 @endif">
    <div class="px-8 flex items-center ml-2">
        <svg
            class="w-4 h-4 @if(request()->routeIs($link)) text-white @else text-gray-400 group-hover:text-gray-100 @endif"
            viewBox="0 0 24 24"
            fill="currentColor">
            <path d="{{ $icon }}"/>
        </svg>
        <p class="tracking-wider font-normal capitalize ml-3 @if(request()->routeIs($link)) text-white @else text-gray-400 group-hover:text-gray-100 @endif">{{ $name }}</p>
    </div>
</a>
