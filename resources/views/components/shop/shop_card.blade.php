<div>
    <a href="{{ route('store.home', $store->slug) }}"
       class="p-2 relative bg-gradient-to-r from-white to-white hover:from-teal-500 hover:to-blue-500 group shadow-sm hover:shadow-2xl transform hover:-translate-y-0.5 rounded-md flex items-center justify-between transition ease-in-out duration-200">
        <div class="w-20 sm:w-3/12 h-full p-2 lg:p-4 border-r">
            <img src="{{ $store->logo }}" class="w-full h-full" alt="">
        </div>
        <div class="flex-1 px-2">
            <p class="text-gray-800 group-hover:text-white text-base">{{ $store->name }}</p>
            <p class="text-gray-500 group-hover:text-gray-300 text-xs">{{ $store->address }}</p>
            @isset($rating)
                <x-rating :rating="$rating" :reviewCount="$reviewCount ?? null"/>
            @endif
            @isset($date)
                <span class="text-gray-500 text-xs mt-1">{{ $store->created_at->diffForHumans() }}</span>
            @endif
        </div>
        @if($store->created_at->gt(now()->subMonths(3)))
            <div class="absolute top-0 right-0 bg-blue-500 rounded py-1 px-2 drop-shadow shadow-sm -mt-1 -mr-1 leading-3">
                <p class="text-xxs flex items-center text-white">
                    <span class="ml-0.5">New</span>
                </p>
            </div>
        @endif
    </a>
</div>
