<div>
    <a href="{{ route('store.home', $store->slug) }}"
       class="p-2 relative bg-gradient-to-tr from-white to-white hover:from-blue-500 hover:to-green-500 group shadow-sm hover:shadow-2xl transform hover:-translate-y-0.5 rounded-md flex items-center justify-between transition ease-in-out duration-200">
        <div class="w-20 sm:w-3/12 h-full p-2 lg:p-4 border-r">
            <img src="{{ $store->logo }}" class="w-full h-full" alt="">
        </div>
        <div class="flex-1 px-2">
            <p class="text-gray-800 group-hover:text-white text-base">{{ $store->name }}</p>
            <p class="text-gray-500 group-hover:text-gray-300 text-xs capitalize">{{ $store->city }}, {{ $store->state }}</p>
            @isset($rating)
                <x-rating :rating="$rating" :reviewCount="$reviewCount ?? null"/>
            @endif
            @isset($date)
                <span class="text-gray-500 text-xs mt-1">{{ $store->created_at->diffForHumans() }}</span>
            @endif
        </div>
        @if($store->created_at->gt(now()->subMonths(3)))
            <div class="absolute top-0 right-0 bg-green-100 rounded px-1 py-0.5 box-shadow -mt-1 -mr-1 leading-none">
                <p class="text-xs flex items-center text-green-700">
                    <span class="ml-0.5">New</span>
                </p>
            </div>
        @endif
    </a>
</div>
