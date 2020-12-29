<x-layout.app title="Store Listings">
    <x-shop.section class="relative mt-16 bg-gradient-to-tr from-green-500 to-blue-500 py-4">
        <div class="flex items-center justify-between text-white">
            <div>
                <p class="text-lg uppercase tracking-tight font-medium py-2">Shops</p>
            </div>
            <svg class="w-6 mr-3 sm:hidden" viewBox="0 0 20 20" fill="currentColor">
                <path d="M9 9a2 2 0 114 0 2 2 0 01-4 0z"/>
                <path fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a4 4 0 00-3.446 6.032l-2.261 2.26a1 1 0 101.414 1.415l2.261-2.261A4 4 0 1011 5z"
                      clip-rule="evenodd"/>
            </svg>
            <form onclick="event.preventDefault()"
                  class="hidden text-sm md:flex items-center bg-white rounded-md text-gray-700">
                <label class="relative">
                    <input class="w-52 px-4 py-2 rounded-md ml-4 focus:outline-none"
                           type="text" placeholder="Search Stores">
                    <div class="absolute top-0 left-0 ml-2 flex h-full items-center">
                        <svg class="w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                </label>
            </form>
        </div>
    </x-shop.section>

    <livewire:component.all-stores/>

    <x-shop.section class="bg-gradient-to-tr from-green-500 to-blue-500 py-4">
        <div class="text-white flex flex-col md:flex-row items-center justify-between">
            <p class="text-sm font-light max-w-md text-center md:text-left md:max-w-lg lg:max-w-3xl mb-4 md:mb-0">
                Want to sell online? Wish you had an online store? Signup now and
                get 2 months free, no credit card required.
            </p>
            <a href="{{ route('seller.register') }}"
               class="bg-white hover:bg-gray-200 text-gray-700 rounded-md px-3 py-2 text-sm">Signup Now</a>
        </div>
    </x-shop.section>

    <x-shop.section_with_header
        heading="Top Performing Shops"
        subheading="Browse through the top performing stores at Sikkim Store.">
        <div class="grid md:grid-cols-2 lg:grid-cols-3  gap-2 lg:gap-4 ">
            @foreach($top_performing_stores as $store)
                <x-shop.shop_card :store="$store" :rating="rand(1, 5)" :reviewCount="rand(1, 200)"/>
            @endforeach
        </div>
    </x-shop.section_with_header>


    <x-shop.section_with_header
        heading="Featured Shops"
        subheading="Browse through the best stores at Sikkim Store.">
        <div class="grid md:grid-cols-2 lg:grid-cols-3  gap-2 lg:gap-4 ">
            @foreach($featured_stores as $store)
                <x-shop.shop_card :store="$store"/>
            @endforeach
        </div>
    </x-shop.section_with_header>

    <x-shop.section_with_header
        heading="Newly Registered Shops"
        subheading="Browse through the latest stores at Sikkim Store.">
        <div class="grid md:grid-cols-2 lg:grid-cols-3  gap-2 lg:gap-4 ">
            @foreach($latest_stores as $store)
                <x-shop.shop_card :store="$store" :date="true"/>
            @endforeach
        </div>
    </x-shop.section_with_header>

    <x-shop.section class="bg-gradient-to-tr from-green-500 to-blue-500 py-4">
        <div class="text-white flex flex-col md:flex-row items-center justify-between">
            <p class="text-sm font-light max-w-md text-center md:text-left md:max-w-lg lg:max-w-3xl mb-4 md:mb-0">
                Still confused? We are available 24x7 to assist you, just hit that support 👉🏼 whenever you feel like.
            </p>
            <a href="{{ '' }}"
               class="bg-white hover:bg-gray-200 text-gray-700 rounded-md px-3 py-2 text-sm">Support</a>
        </div>
    </x-shop.section>

</x-layout.app>
