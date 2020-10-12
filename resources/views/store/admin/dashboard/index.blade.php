<x-layout.store title="Sikkim Store's Dashboard">
    <section>
        <div class="w-screen bg-cool-gray-200">
            <div class="flex">
                <x-dashboard-side-bar :store="$store"/>
                <x-dashboard.content :store="$store" name="Dashboard">
                    <div class="mb-8">
                        <div class="grid grid-cols-4 gap-8">
                            <x-dashboard.overview_card name="Orders" number="34,000" percentage="12.89" time="From previous period" trend="minus">
                                <svg class="text-gray-300 w-8" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"/><path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                </svg>
                            </x-dashboard.overview_card>
                            <x-dashboard.overview_card name="Revenue" number="₹ 21,900" percentage="34.56" time="From previous period" trend="plus">
                                <svg class="text-gray-300 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 5a1 1 0 100 2h1a2 2 0 011.732 1H7a1 1 0 100 2h2.732A2 2 0 018 11H7a1 1 0 00-.707 1.707l3 3a1 1 0 001.414-1.414l-1.483-1.484A4.008 4.008 0 0011.874 10H13a1 1 0 100-2h-1.126a3.976 3.976 0 00-.41-1H13a1 1 0 100-2H7z" clip-rule="evenodd"/>
                                </svg>
                            </x-dashboard.overview_card>
                            <x-dashboard.overview_card name="Average Price" number="₹ 1,400" percentage="0.00" time="From previous month" trend="neutral">
                                <svg class="text-gray-300 w-8" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                                </svg>
                            </x-dashboard.overview_card>

                            <x-dashboard.overview_card name="Product Sold" number="11,400" percentage="90.89" time="From previous period" trend="plus">
                                <svg class="w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                            </x-dashboard.overview_card>
                        </div>
                    </div>
                    <div class="rounded-md text-gray-600 text-small mb-8">
                        <div class="text-xs font-medium tracking-wider uppercase mb-1">Sales</div>
                        <div class="grid grid-cols-3 gap-8">
                            <div class="w-full p-4 shadow-md rounded-md bg-white">
                                <h2 class="text-base mb-3">Today <span
                                        class="text-xs ml-3">{{ now()->format('D, d M Y') }}</span></h2>
                                <div class="flex items-center justify-between">
                                    <div>
                                        <div class="text-gray-500 mb-2">
                                            Today's Orders: <span
                                                class="ml-3 text-green-600 font-medium">23,00.00</span>
                                        </div>
                                        <div class="text-gray-500 mb-2">
                                            Shipped Today: <span
                                                class="ml-3 text-green-600 font-medium">2,00.00</span>
                                        </div>
                                        <div class="text-gray-500 mb-2">
                                            Shipped Today: <span
                                                class="ml-3 text-green-600 font-medium">2,00.00</span>
                                        </div>
                                    </div>
                                    <div class="mr-2">
                                        <svg class="w-9 text-green-600" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                        </svg>
                                        <h2 class="mt-1 text-base text-gray-500">23.98 &percnt;</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full p-4 shadow-md rounded-md bg-white">
                                <h2 class="text-base mb-3">Monthly <span
                                        class="text-xs ml-3">{{ now()->subMonth()->format('d M y') .' - '. now()->format('d M y')}}</span>
                                </h2>
                                <div class="flex items-center justify-between">
                                    <div>
                                        <div class="text-gray-500 mb-2">
                                            Today's Orders: <span
                                                class="ml-3 text-green-600 font-medium">23,00.00</span>
                                        </div>
                                        <div class="text-gray-500 mb-2">
                                            Shipped Today: <span
                                                class="ml-3 text-green-600 font-medium">2,00.00</span>
                                        </div>
                                        <div class="text-gray-500 mb-2">
                                            Shipped Today: <span
                                                class="ml-3 text-green-600 font-medium">2,00.00</span>
                                        </div>
                                    </div>
                                    <div class="mr-2">
                                        <svg class="w-9 text-red-600" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6"/>
                                        </svg>
                                        <h2 class="mt-1 text-base text-gray-500">23.98 &percnt;</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full p-4 shadow-md rounded-md bg-white">
                                <h2 class="text-base mb-3">Yearly <span
                                        class="text-xs ml-3">{{ now()->subYear()->format('M Y') .' - '. now()->format('M Y')}}</span>
                                </h2>
                                <div class="flex items-center justify-between">
                                    <div>
                                        <div class="text-gray-500 mb-2">
                                            Today's Orders: <span
                                                class="ml-3 text-green-600 font-medium">23,00.00</span>
                                        </div>
                                        <div class="text-gray-500 mb-2">
                                            Shipped Today: <span
                                                class="ml-3 text-green-600 font-medium">2,00.00</span>
                                        </div>
                                        <div class="text-gray-500 mb-2">
                                            Shipped Today: <span
                                                class="ml-3 text-green-600 font-medium">2,00.00</span>
                                        </div>
                                    </div>
                                    <div class="mr-2">
                                        <svg class="w-9 text-red-600" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6"/>
                                        </svg>
                                        <h2 class="mt-1 text-base text-gray-500">23.98 &percnt;</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-md text-gray-600 text-small mb-8">
                        <div class="flex items-center justify-between">
                            <div class="text-xs font-medium tracking-wider uppercase mb-1">Top Performing</div>
                            <div class="text-xs font-medium tracking-wider mb-1 ml-8 mr-2">
                                <div class="flex items-center text-gray-500">
                                    <svg class="w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    {{ now()->subMonth()->format('M').' - ' .now()->format('M') }}
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-8">
                            <div class="w-full p-4 shadow-md rounded-md bg-white">
                                <h2 class="uppercase text-small font-medium text-cool-gray-500 mb-4">
                                    Top Selling Product
                                </h2>
                                <div class="flex items-center justify-between">
                                    <h3 class="text-base font-medium text-green-600">iPhone XR 64GB</h3>
                                    <div class="inline-flex">
                                        <svg class="w-4 text-red-600" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M12 13a1 1 0 100 2h5a1 1 0 001-1V9a1 1 0 10-2 0v2.586l-4.293-4.293a1 1 0 00-1.414 0L8 9.586 3.707 5.293a1 1 0 00-1.414 1.414l5 5a1 1 0 001.414 0L11 9.414 14.586 13H12z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                        <span class="ml-2 text-gray-500 font-medium">12.89 &percnt;</span>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full p-4 shadow-md rounded-md bg-white">
                                <h2 class="uppercase text-small font-medium text-cool-gray-500 mb-4">
                                    Top Performing Category
                                </h2>
                                <div class="flex items-center justify-between">
                                    <h3 class="text-base font-medium text-green-600">Electronics</h3>
                                    <div class="inline-flex">
                                        <svg class="w-4 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                        <span class="ml-2 text-gray-500 font-medium">12.89 &percnt;</span>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full p-4 shadow-md rounded-md bg-white">
                                <h2 class="uppercase text-small font-medium text-cool-gray-500 mb-4">
                                    Prime Selling Time
                                </h2>
                                <div class="flex items-center justify-between">
                                    <h3 class="text-base font-medium text-green-600"> {{ now()->format('h:i A') .' - ' .now()->addMinutes(30)->format('h:i A') }}</h3>
                                    <div class="inline-flex">
                                        <svg class="w-4 text-red-600" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M12 13a1 1 0 100 2h5a1 1 0 001-1V9a1 1 0 10-2 0v2.586l-4.293-4.293a1 1 0 00-1.414 0L8 9.586 3.707 5.293a1 1 0 00-1.414 1.414l5 5a1 1 0 001.414 0L11 9.414 14.586 13H12z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                        <span class="ml-2 text-gray-500 font-medium">12.89 &percnt;</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </x-dashboard.content>
            </div>
        </div>
    </section>
</x-layout.store>
