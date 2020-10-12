<x-layout.store title="{{ $store->name }}">
    <div class="max-w-7xl mx-auto px-8 py-10">
        <a href="{{route('store.home', $store)}}" class="mb-8 flex items-center space-x-3">
            <img src="{{ $store->logo }}" class="h-10 w-10 object-cover" alt="">
            <h2 class="text-lg">{{ $store->name }}</h2>
        </a>
        <div class="bg-white p-4 shadow-sm flex items-center space-x-3 rounded-md text-blue-500 mb-8">
            <span class="text-gray-700">Categories: </span>
            @foreach($categories as $category)
                <a href={{ route('store.admin.categories.show', [$store, $category]) }} class="hover:underline">{{ $category->name }}</a>
            @endforeach
        </div>


        <div class="grid grid-cols-3 gap-10 bg-gray-300 p-4 shadow-sm rounded-md mb-8 text-gray-500 text-sm">
            @foreach($products as $product)
                <a href="#"
                   class="shadow-sm bg-white p-4 rounded-md flex flex-col h-full space-y-2 hover:shadow-lg transform hover:-translate-y-0.5">
                    <div>
                        <p>Name:</p>
                        <span class="text-gray-900 text-base">{{ $product->name }}</span>
                    </div>
                    <div>
                        <p>Category:</p>
                        <span class="text-gray-900 text-base">{{ $product->category->name }}</span>
                    </div>
                    <div>
                        <p>Description:</p>
                        <span class="text-gray-900 text-base truncate-3-lines">{{ $product->description }}</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start justify-end">
                        <p>Price: <span class="text-gray-800">{{ $product->price }}</span></p>
                    </div>
                </a>
            @endforeach
        </div>

        {{ $products->links() }}
    </div>
</x-layout.store>
