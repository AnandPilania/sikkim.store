<div>
    <x-shop.section_with_header
        heading="All Shops"
        subheading="Browse through all the stores at Sikkim Store.">
        <div wire:loading.class.add.delay="opacity-50" class="grid md:grid-cols-2 lg:grid-cols-3  gap-2 lg:gap-4">
            @foreach($stores as $store)
                <x-shop.shop_card :store="$store" :date="true"/>
            @endforeach
        </div>
        <x-slot name="action">
            <x-shop.sort_menu :sortName="$sortName" :svg="$chronological ?: null"/>
        </x-slot>
        <x-slot name="link">
            {{ $stores->links() }}
        </x-slot>
    </x-shop.section_with_header>
</div>
