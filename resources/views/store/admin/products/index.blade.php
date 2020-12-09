<x-layout.store title="Sikkim Store's Dashboard">
    <section>
        <div class="w-screen bg-cool-gray-200">
            <div class="flex">
                <x-dashboard-side-bar :store="$store"/>
                <x-dashboard.content :store="$store" name="Products">
                    <x-slot name="action">
                        <button
                            class="bg-indigo-600 text-white px-4 py-2.5 focus:outline-none hover:bg-indigo-700 rounded-md text-sm">
                            Add Product
                        </button>
                    </x-slot>
                    <div class="text-gray-600 grid grid-cols-4 gap-6 mb-4">
                        @foreach ($products as $product)
                            <div class="bg-white shadow-sm rounded-md overflow-hidden hover:shadow-lg border">
                                <div class="h-56 w-full object-cover">
                                    <img
                                        src="{{ $product->featured_image }}"
                                        class="h-full w-full object-cover" alt="">
                                </div>
                                <div class="p-4 border-t">
                                    <p class="text-sm leading-relaxed mb-2 truncate-1-lines">{{ $product->name }}</p>
                                    <p class="text-gray-800 font-bold font-sans tabular-nums uppercase">{{ Str::substr($product->uuid, 0, 8) }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{ $products->links() }}
                </x-dashboard.content>
            </div>
        </div>
    </section>
</x-layout.store>
