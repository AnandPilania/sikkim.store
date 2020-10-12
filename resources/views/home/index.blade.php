<x-layout.app title="Home">
    <x-shop.hero image="{{ asset('logos/hero.svg') }}">
        <x-slot name="action">
            <livewire:component.signup-modal
                action-name="Register Early Access Now"
                subtext="Sign up for early access when we launch."/>
        </x-slot>
        <h1 class="text-2xl md:text-4xl text-white mb-6 font-titleFont">Success starts with a click.</h1>
        <p class="text-gray-200 mb-8 max-w-xl text-sm md:text-base">
            Online store make 3 times more sales than average shops. And e-commerce sales are growing 46%
            year-on-year*. For a lot of businesses, building an online store has gone from nice-to-have to
            utterly essential, overnight.
            <br>
            So get your own store in just a click. And get your first 2 months free.</p>
    </x-shop.hero>

    <x-shop.section_with_header heading="Featured Shops" subheading="Browse through the best shops at Sikkim Store.">
        <x-slot name="action">
            <form onclick="event.preventDefault()"
                  class="hidden border border-gray-400 text-sm md:flex items-center bg-white rounded-md">
                <label class="relative">
                    <input type="text" placeholder="Search Stores"
                           class="w-52 px-4 py-2 rounded-md ml-4 focus:outline-none placeholder-opacity-10">
                    <div class="absolute top-0 left-0 ml-2 flex h-full items-center">
                        <svg class="w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                </label>
            </form>
        </x-slot>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-1 sm:gap-2 lg:gap-4 ">
            @foreach($featured_stores as $store)
                <x-shop.shop_card :store="$store"/>
            @endforeach
        </div>
        <x-slot name="link">
            <a href="{{ route('shops') }}"
               class="max-w-max-content mx-auto flex items-center justify-center bg-white bg-gradient-to-tr from-white to-gray-50 hover:from-teal-500 hover:to-blue-500 transform hover:-translate-y-0.5 shadow-md hover:shadow-2xl px-8 py-3 rounded-md text-sm transition ease-in-out duration-150 group">
                <span
                    class="bg-clip-text bg-gradient-to-tr from-teal-500 to-blue-500 text-transparent group-hover:text-white">View all stores</span>
                <svg class="inline w-5 ml-1 text-blue-500 group-hover:text-white" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20" fill="currentColor">
                    <path
                        d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                </svg>
            </a>
        </x-slot>
    </x-shop.section_with_header>

    <x-shop.section class="bg-gradient-to-tr from-teal-500 to-blue-500 py-4">
        <div class="text-white flex flex-col md:flex-row items-center justify-between">
            <p class="text-sm font-light max-w-md text-center md:text-left md:max-w-lg lg:max-w-3xl mb-4 md:mb-0">
                Want to sell online? Wish you had an online store? Signup now and
                get 2 months free, no credit card required.
            </p>
            <a href="{{ route('seller.register') }}"
               class="bg-white hover:bg-gray-200 text-gray-700 rounded-md px-3 py-2 text-sm">Signup Now</a>
        </div>
    </x-shop.section>
</x-layout.app>
