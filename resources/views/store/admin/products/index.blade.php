<x-layout.store title="{{$store->name}}'s Dashboard | Product Index">
    <section>
        <div class="w-screen bg-white">
            <div class="flex">
                <x-dashboard-side-bar :store="$store"/>
                <x-dashboard.content :store="$store" name="Products">
                    <x-slot name="action">
                        <a href="{{ route('store.admin.products.create', $store) }}"
                            class="bg-gradient-to-tr from-indigo-600 to-blue-600 text-white font-semibold px-4 py-2.5 focus:outline-none hover:bg-indigo-700 rounded-md text-sm">
                            Add Product
                        </a>
                    </x-slot>

                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full">
                                        <thead class="bg-gray-500 shadow">
                                        <tr>
                                            <th scope="col"
                                                class="rounded-l-md px-3 py-3 text-left text-xs font-semibold text-gray-100 uppercase tracking-wider">
                                                Image
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 text-left text-xs font-semibold text-gray-100 uppercase tracking-wider">
                                                Name/UUID
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-semibold text-gray-100 uppercase tracking-wider whitespace-nowrap">
                                                SKU/Product ID
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-right text-xs font-semibold text-gray-100 uppercase tracking-wider">
                                                Price
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-semibold text-gray-100 uppercase tracking-wider">
                                                Status
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-right text-xs font-semibold text-gray-100 uppercase tracking-wider">
                                                Inventory
                                            </th>
                                            <th scope="col"
                                                class="rounded-r-md px-6 py-3 text-left text-xs font-semibold text-gray-100 uppercase tracking-wider">
                                                Actions
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white">
                                        <tr class="bg-gray-200">
                                            <td colspan="7" class="bg-transparent py-1"></td>
                                        </tr>
                                        @foreach ($products as $product)
                                            <tr class="align-top">
                                                <td class="px-3 py-5 whitespace-nowrap rounded-l-md">
                                                    <div class="flex-shrink-0 h-12 w-12 rounded-md overflow-hidden">
                                                        <img class="h-full w-full object-cover"
                                                             src="{{ $product->featured_image }}"
                                                             alt="{{ $product->name }}">
                                                    </div>
                                                </td>
                                                <td class="px-3 py-4">
                                                    <div class="leading-none">
                                                        <div class="w-full max-w-md text-sm font-medium text-gray-900 truncate-3-lines capitalize">
                                                            {{ $product->name }}
                                                        </div>
                                                        <div class="mt-1 text-xs text-gray-600 font-medium uppercase">{{ $product->category->name }}</div>
                                                        <div class="mt-1 text-xs text-gray-500 uppercase">{{ $product->uuid }}</div>
                                                        <div class="mt-1 text-xs flex flex-wrap items-center space-x-2">
                                                            <div class="px-2 py-0.5 rounded-md bg-indigo-50 w-max text-indigo-600">tag one</div>
                                                            <div class="px-2 py-0.5 rounded-md bg-indigo-50 w-max text-indigo-600">tag two</div>
                                                            <div class="px-2 py-0.5 rounded-md bg-indigo-50 w-max text-indigo-600">tag three</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900 font-medium uppercase tabular-nums font-sans max-w-sm">
                                                        {{ Str::substr($product->uuid, 0, 8) }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right">
                                                    <p class="text-gray-600 tabular-nums font-sans text-sm font-bold">
                                                        {{ $product->price }}
                                                    </p>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        Active
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-right">
                                                    <p class="text-gray-600 tabular-nums font-sans text-sm font-bold">
                                                        34 <span class="text-gray-400 font-normal ml-2"> /123</span>
                                                    </p>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium rounded-r-md">
                                                    <div class="flex items-center">
                                                        <a href="{{ route('store.admin.products.edit', [$store, $product]) }}"
                                                           class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                        <button class="ml-4 text-gray-500">
                                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd"
                                                                      d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                                                      clip-rule="evenodd"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-200">
                                                <td colspan="7" class="bg-transparent py-1"></td>
                                            </tr>
                                        @endforeach

                                        <!-- More rows... -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{ $products->links() }}
                </x-dashboard.content>
            </div>
        </div>
    </section>
</x-layout.store>
