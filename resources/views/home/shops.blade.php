<x-layout.home title="Store Listings">

    <div class="pt-20"></div>

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

    <div>
        <livewire:component.all-stores/>
    </div>

    <x-shop.section class="bg-gradient-to-tr from-blue-500 to-blue-600 py-4">
        <div class="text-white flex flex-col md:flex-row items-center justify-between">
            <p class="text-sm font-medium max-w-md text-center md:text-left md:max-w-lg lg:max-w-3xl mb-4 md:mb-0">
                Still confused? We are available 24x7 to assist you, just hit that support whenever you feel like. 👉🏼
            </p>
            <a href="{{ '' }}"
               class="bg-white hover:bg-gray-200 text-gray-700 rounded-md px-3 py-2 text-sm">Support</a>
        </div>
    </x-shop.section>

</x-layout.home>
