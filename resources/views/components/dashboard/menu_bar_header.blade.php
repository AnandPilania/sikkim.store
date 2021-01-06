<div
    class="flex items-center justify-start py-5 px-2 h-18 pl-8">
    <a href="{{ route('store.admin.dashboard', $store) }}"
       class="flex items-center flex-shrink-0 text-gray-600 overflow-hidden">
        <img src="{{ $store->logo }}" class="h-8" alt="">
        <h2 class="ml-2 text-sm truncate font-semibold">{{ $store->name }}</h2>
    </a>
</div>
