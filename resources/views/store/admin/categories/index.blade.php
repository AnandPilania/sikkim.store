<x-layout.store title="Sikkim Store's Dashboard">
    <section>
        <div class="w-screen bg-cool-gray-200">
            <div class="flex">
                <x-dashboard-side-bar :store="$store"/>
                <x-dashboard.content :store="$store" name="Categories">
                    <x-slot name="action">
                        <button
                            class="bg-indigo-600 text-white px-4 py-2.5 focus:outline-none hover:bg-indigo-700 rounded-md text-sm">
                            Add Category
                        </button>
                    </x-slot>
                    <div class="text-gray-600">
                        <div class="text-gray-600 grid grid-cols-4 gap-6 mb-4">
                            @foreach ($categories as $category)
                                <div
                                    class="p-4 flex items-center justify-center bg-white shadow-sm rounded-md overflow-hidden hover:shadow-lg border">
                                    <p class="text-sm leading-relaxed mb-2 truncate-1-lines">{{ $category->name }}</p>
                                </div>
                            @endforeach
                        </div>
                        {{ $categories->links() }}
                    </div>
                </x-dashboard.content>
            </div>
        </div>
    </section>
</x-layout.store>
