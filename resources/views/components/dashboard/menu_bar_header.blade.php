<div
    class="flex items-center justify-center bg-dark bg-opacity-98 py-5 px-2 h-18">
    <a href="{{ route('store.admin.dashboard', $store) }}"
       class="flex items-center flex-shrink-0 text-white hover:text-white overflow-hidden">
        <img src="{{ $store->logo }}" class="h-8" alt="">
        <h2 class="ml-2 text-sm truncate">{{ $store->name }}</h2>
    </a>
</div>
