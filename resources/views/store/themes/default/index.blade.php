<x-layout.store title="{{ $store->name }}">

    <!--Desktop-->
    <section class="hidden lg:block bg-yellow-300 text-gray-500 py-4">
        <div class="container max-w-5xl mx-auto flex justify-between items-center text-xs">
            <div class="flex items-center justify-start space-x-4">
                <a href="{{route('store.home', $store)}}" class="inline-flex items-center">
                    <svg class="w-3 h-3 mr-2 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                         viewBox="0 0 24 24">
                        <path
                            d="M10 9V7.902L11.047 3h1.905L14 7.9v1.098C14 10.065 13.067 11 12 11s-2-.933-2-2zm5 0c0 1.067.934 2 2.001 2S19 10.167 19 9.1V8.002L16.004 3h-1.943L15 7.902V9zM5 9.068C5 10.135 5.933 11 7 11s2-.865 2-1.932V7.971L9.939 3H7.996L5 7.971v1.097zM1 12h22v12H1V12zm2 8h18v-6H3v6zM4 9.068V7.971L6.887 3H4.873L0 7.971v1.098C0 10.135.933 11 2 11s2-.865 2-1.932zM19.127 3h-2.014L20 7.902V9c0 1.067.933 2 2 2s2-.865 2-1.932V7.971L19.127 3zM19 0H5v2h14V0z"/>
                    </svg>
                    {{ $store->name }}
                </a>
                <div class="inline-flex items-center">
                    <svg class="w-4 h-4 mr-1 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    {{ $store->email }}
                </div>
                <div class="inline-flex items-center">
                    <svg class="w-4 h-4 mr-1 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    {{ $store->phone }}
                </div>
            </div>
            <div class="flex items-center justify-end space-x-4">
                <div>About</div>
                <div>FAQs</div>
                <div>Contact</div>
            </div>
        </div>
    </section>
    <section class="hidden lg:block bg-yellow-300 pb-8 pt-4">
        <div class="container max-w-5xl mx-auto flex justify-between items-center">
            <a href="{{route('store.home', $store)}}" class="flex-none">
                <img src="{{ $store->logo }}" class="w-16 h-16 object-cover" alt="{{ $store->name }}">
            </a>
            <div
                class="flex flex-auto mx-6 items-center text-xs rounded-md overflow-hidden bg-gray-50 h-13 max-w-xl shadow">
                <div
                    class="py-4 px-5 flex items-center justify-between border-r border-gray-200 text-gray-600 flex-none">
                    <span class="mr-8">All Categories</span>
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>
                <div class="relative flex-1 ">
                    <label>
                        <input type="text" placeholder="What are we looking for.... (Press '/' to focus)"
                               aria-label="Search"
                               class="text-sm focus:outline-none focus:ring-0 border-none w-full bg-gray-50 px-4">
                    </label>
                </div>
            </div>
            <div class="flex items-center space-x-4 flex-none">
                @auth('user')
                    <a href="{{ route('store.cart.index', $store) }}" class="flex items-center">
                        <svg class="w-4 h-4 text-gray-800 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <p class="text-xs capitalize font-medium tabular-nums">{{ request()->cart->total_products }}</p>
                    </a>

                    <a href=""
                       class="relative flex items-center justify-center mx-3 focus:outline-none  transition duration-150 ease-in-out">
                        <svg class="absolute inset-0 text-green-600 w-5 animate-ping" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                        </svg>
                        <svg class="w-5 text-gray-600 relative" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path
                                d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                        </svg>
                    </a>

                    <div class="ml-3 relative"
                         x-data="{ isOpen: false }">
                        <button
                            class="flex text-sm rounded-full overflow-hidden focus:outline-none  border-white focus:border-indigo-500 transition duration-150 ease-in-out"
                            @click="isOpen = !isOpen"
                            @keydown.escape="isOpen = false">
                            <img
                                class="h-8 w-8 rounded-full object-cover border border-gray-500 hover:border-indigo-800"
                                src="{{'https://ui-avatars.com/api/?background=0D8ABC&color=fff&name='.auth()->user()->name}}"
                                alt=""/>
                        </button>
                        <div x-show="isOpen"
                             x-transition:enter="transition ease-out transform duration-150 transform"
                             x-transition:enter-start="opacity-0 scale-75"
                             x-transition:enter-end="opacity-100 scale-100"
                             x-transition:leave="transition ease-in transform duration-100 transform"
                             x-transition:leave-start="opacity-100 scale-100"
                             x-transition:leave-end="opacity-0 scale-75"
                             @click.away="isOpen = false "
                             class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg z-20">
                            <div class="rounded-md bg-white shadow-md">
                                <a href="{{ route('user.profile') }}"
                                   class="block px-4 py-2 text-sm leading-5 text-gray-700 rounded-t-md hover:bg-green-500 hover:text-white focus:outline-none transition duration-150 ease-in-out">
                                    <i class="fas fa-user mr-4"></i> Your Profile </a>

                                <a href="{{ '' }}"
                                   class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:text-white hover:bg-green-500 focus:outline-none transition duration-150 ease-in-out">
                                    <i class="fas fa-cog mr-4"></i>Track Order</a>

                                <form action="{{ route('logout') }}"
                                      method="post">
                                    @csrf
                                    <button
                                        class="block w-full text-left px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-green-500 hover:text-white rounded-b-md focus:outline-none transition duration-150 ease-in-out">
                                        <i class="fas fa-sign-out-alt mr-4"></i>Sign out
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <button class="text-sm font-semibold">
                        Sign up / Sign in
                    </button>
                @endauth
            </div>
        </div>
    </section>

    <!--Responsive-->
    <section class="hidden lg:block bg-yellow-300 h-16 sticky top-0 z-10">
        <div class="container max-w-5xl mx-auto flex justify-between items-center h-full text-gray-700">
            <div class="flex items-center justify-between">
                <div class="inline-flex items-center">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                    </svg>
                    <span class="text-xs">All Categories</span>
                </div>
                <svg class="h-4 w-4 ml-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </div>
            <div class="inline-flex items-center">
                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor" fill-rule="evenodd"
                     clip-rule="evenodd" viewBox="0 0 24 24">
                    <path
                        d="M21.598 11.456C23.064 12.649 24 14.466 24 16.5c0 3.587-2.913 6.5-6.5 6.5-.817 0-1.599-.151-2.32-.427l6.418-11.117zM9.695 19.865l-.363.634c-1.38 2.391-4.441 3.211-6.831 1.831C.11 20.95-.71 17.889.67 15.499L7.543 3.501C8.474 1.888 10.169.99 11.908 1c.839.005 1.688.221 2.466.67 1.842 1.063 2.752 3.125 2.441 5.108-.069.437-.196.869-.386 1.287-.98.124-1.909.415-2.756.843l.799-1.407c.828-1.434.336-3.271-1.098-4.099-1.434-.828-3.271-.335-4.099 1.099l-3.372 5.935 3.978 2.296c-.563 1.136-.879 2.415-.879 3.767 0 1.195.247 2.334.693 3.366zm3.75 1.714C11.955 20.387 11 18.554 11 16.5c0-3.587 2.913-6.5 6.5-6.5.837 0 1.637.158 2.372.447l-6.427 11.132z"/>
                </svg>
                <span class="text-xs">Medicines</span>
            </div>
            <div class="inline-flex items-center">
                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
                <span class="text-xs">Personal Care</span>
            </div>
            <div class="inline-flex items-center">
                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                </svg>
                <span class="text-xs">Medical Equipments</span>
            </div>
            <div class="inline-flex items-center">
                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <defs/>
                    <path
                        d="M21.174 8.205C20.747 3.262 17.092 1 12 1 6.857 1 3.249 3.311 2.826 8.205.8 8.347 0 10.284 0 12.426c0 1.888.861 4.627 3.176 5.159C4.369 21.131 7.405 23 12 23s7.631-1.869 8.824-5.415C23.139 17.053 24 14.314 24 12.426c0-2.128-.794-4.079-2.826-4.221zm-1.141 7.471c-.449.009-.836.315-.949.749C18.297 19.461 15.914 21 12 21s-6.297-1.539-7.083-4.575c-.113-.434-.5-.74-.949-.749-2.135-.041-2.438-4.65-1.336-5.367.272-.177.614-.104.756-.041.671.3 1.427-.207 1.406-.941-.071-2.526.931-4.647 3.23-5.706-.663 2.823 2.205 5.638 6.672 4.598-4.012-1.098-1.056-6.221 2.352-3.954 1.608 1.217 2.214 3.072 2.16 5.063-.021.739.743 1.239 1.406.941.142-.064.483-.137.756.041 1.101.716.798 5.325-1.337 5.366zM16.5 11.5c0 .828-.56 1.5-1.25 1.5S14 12.328 14 11.5s.56-1.5 1.25-1.5 1.25.672 1.25 1.5zM8.75 13c-.69 0-1.25-.672-1.25-1.5S8.06 10 8.75 10s1.25.672 1.25 1.5S9.44 13 8.75 13zM8 16h8s-.844 2.875-4 2.875C8.75 18.875 8 16 8 16z"/>
                </svg>
                <span class="text-xs">Medical Equipments</span>
            </div>
            <div class="text-gray-900 uppercase text-sm font-medium">
                Daily Deals
            </div>
        </div>
    </section>
    <section class="lg:hidden bg-yellow-300 sticky top-0 z-10">
        <div class="container max-w-5xl mx-auto text-gray-700 py-3 px-4">
            <div class="flex items-center">
                <a href="{{ route('store.home', $store) }}" class="flex-none">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-800 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <img src="{{ $store->logo }}" alt="" class="w-8 h-8 flex-none">
                    </div>
                </a>
                <div class="flex-auto flex justify-end items-center space-x-4">
                    <div>
                        <svg class="w-6 h-6 text-gray-700" fill="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                        </svg>
                    </div>
                    <div>
                        <svg class="h-5 w-5 text-gray-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path
                                d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                        </svg>
                    </div>
                    <div>
                        <svg class="h-5 w-5 text-gray-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path
                                d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                        </svg>
                    </div>
                    <div>
                        <svg class="w-6 h-6 text-gray-700" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <g fill="currentColor" fill-rule="evenodd">
                                <path
                                    d="m5.948 6.447c0 1.861 1.552 3.369 3.467 3.369 1.914 0 3.466-1.509 3.466-3.369 0-1.862-1.552-3.37-3.466-3.37-1.915 0-3.467 1.509-3.467 3.37m8.289 5.682c-.121-.041-.245-.075-.37-.102 0 0-1.153-.456-4.367-.456-3.214 0-4.367.456-4.367.456-1.735.343-3.133 2.108-3.133 3.878v2.095h9.357c-.229-.525-.357-1.105-.357-1.714 0-2.01 1.377-3.689 3.237-4.157m.215 5.623l.55.555.532-.573 2.973-3.2c.282-.303.264-.778-.039-1.06-.303-.282-.778-.264-1.06.039l-2.406 2.486-.698-.528c-.292-.294-.766-.297-1.061-.005-.294.292-.297.766-.005 1.061l1.213 1.225"></path>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="hidden">
                <label>
                    <input type="text" class="text-gray-500 px-2 py-2 w-full rounded-sm text-base focus:outline-none"
                           placeholder="Search for Products, Brands and More">
                </label>
            </div>
        </div>
    </section>

    <section class="bg-white md:py-8">
        <div class="relative container max-w-5xl mx-auto swiper-container">
            <div class="relative swiper-wrapper">
                <div class="swiper-slide h-40 md:h-80 bg-gray-200 md:rounded-md overflow-hidden">
                    <img class="w-full h-full object-cover"
                         src="https://images.unsplash.com/photo-1604644401890-0bd678c83788?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2250&q=80"
                         alt="">
                </div>
                <div class="swiper-slide h-40 md:h-80 bg-gray-200 md:rounded-md overflow-hidden">
                    <img class="w-full h-full object-cover"
                         src="https://images.unsplash.com/photo-1477405683380-d9ffd9174fae?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2555&q=80"
                         alt="">
                </div>
                <div class="swiper-slide h-40 md:h-80 bg-gray-200 md:rounded-md overflow-hidden">
                    <img class="w-full h-full object-cover"
                         src="https://images.unsplash.com/photo-1556159991-b4876ad5ef9b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2250&q=80"
                         alt="">
                </div>
            </div>
            <div class="absolute inset-x-0 bottom-2 md:bottom-5 flex items-center justify-center">
                <div class="flex space-x-2 swiper-pagination"></div>
            </div>
        </div>
    </section> {{--Banner top--}}

    <section class="bg-gray-200 md:bg-white py-6 md:py-8">
        <div class="container max-w-5xl mx-auto">
            <div class="mb-6 md:mb-12 px-4 lg:px-0">
                <div class="">Featured Products</div>
                <div class="bg-yellow-300 h-1 w-20 mt-1 rounded-full"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 sm:gap-4 md:gap-8">
                @foreach($featured_products as $product)
                    <div href="{{ route('store.products.show', [$store, $product]) }}"
                         class="px-4 md:px-0 bg-white md:bg-transparent p-2 md:p-0 flex md:flex-col items-start md:items-stretch space-x-4 md:space-x-0">
                        <div
                            class="relative w-24 md:w-full h-24  md:h-52 bg-gray-100 rounded-md md:mb-2 overflow-hidden">
                            <a href="{{ route('store.products.show', [$store, $product]) }}">
                                <img src="{{ $product->featured_image }}"
                                     class="w-full h-full object-cover cursor-pointer ring-1 ring-gray-200" alt="">
                            </a>
                            <button class="absolute top-3 right-3 p-1 bg-gray-500 bg-opacity-40 rounded-full">
                                <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </div>

                        <div class="flex-1 flex flex-col h-auto">
                            <p class="text-xs font-semibold tracking-wide text-gray-400 uppercase mb-2">{{ $product->category->name }}</p>

                            <p class="tracking-tighter text-sm truncate-2-lines mb-2 md:mb-4 text-gray-600 capitalize">{{ $product->name }}</p>

                            <div class="flex-1 flex flex-col justify-end">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <p class="font-sans tabular-nums uppercase text-sm font-bold text-gray-700 mr-2">{{ $product->price }}</p>
                                        <p class="hidden md:block text-xs text-gray-400 tabular-nums line-through">{{ $product->original_price }}</p>
                                    </div>
                                    <a href="{{ route('store.cart.store', [$store, $product]) }}"
                                        class="bg-yellow-300 text-xs px-4 py-1.5 rounded-full inline-flex items-center shadow">
                                        <svg class="w-4 h-4 mr-0.5 text-gray-800" xmlns="http://www.w3.org/2000/svg"
                                             fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M10.975 8L11 7.5c0-.517-.067-1.018-.181-1.5h5.993l-.564 2h-5.273zM8.5 18c-.828 0-1.5.672-1.5 1.5 0 .829.672 1.5 1.5 1.5s1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zM19.805 3l-3.432 12H5.945l-.455-1.083c-.323.049-.653.083-.99.083-.407 0-.805-.042-1.191-.114L4.615 17h13.239l3.474-12h1.929L24 3h-4.195zM13.5 18c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zM9 7.5C9 9.985 6.982 12 4.5 12 2.016 12 0 9.985 0 7.5S2.016 3 4.5 3C6.982 3 9 5.015 9 7.5zM7 7H5V5H4v2H2v1h2v2h1V8h2V7z"/>
                                        </svg>
                                        <span>Add</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> {{--Featured Products--}}

    <section class="bg-white py-12">
        <div class="container max-w-5xl mx-auto">
            <div class="grid grid-cols-3 gap-8">
                <div class="bg-gray-200 h-40 w-full rounded-md overflow-hidden">
                    <img class="w-full h-full object-cover"
                         src="https://images.unsplash.com/photo-1559163499-413811fb2344?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2250&q=80"
                         alt="">
                </div>
                <div class="bg-gray-200 h-40 w-full rounded-md overflow-hidden">
                    <img class="w-full h-full object-cover"
                         src="https://images.unsplash.com/photo-1595341888016-a392ef81b7de?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2558&q=80"
                         alt="">
                </div>
                <div class="bg-gray-200 h-40 w-full rounded-md overflow-hidden">
                    <img class="w-full h-full object-cover"
                         src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2250&q=80"
                         alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-200 md:bg-white py-8 md:pb-28">
        <div class="container max-w-5xl mx-auto">
            <div class="mb-8 md:mb-12 px-4 lg:px-0">
                <div class="">Latest Products</div>
                <div class="bg-yellow-300 h-1 w-20 mt-1 rounded-full"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 sm:gap-4 md:gap-8">
                @foreach($latest_products as $product)
                    <div href="{{ route('store.products.show', [$store, $product]) }}"
                         class="px-4 md:px-0 bg-white md:bg-transparent p-2 md:p-0 flex md:flex-col items-start md:items-stretch space-x-4 md:space-x-0">
                        <div
                            class="relative w-24 md:w-full h-24  md:h-52 bg-gray-100 rounded-md md:mb-2 overflow-hidden">
                            <a href="{{ route('store.products.show', [$store, $product]) }}">
                                <img src="{{ $product->featured_image }}"
                                     class="w-full h-full object-cover cursor-pointer ring-1 ring-gray-200" alt="">
                            </a>
                            <button class="absolute top-3 right-3 p-1 bg-gray-500 bg-opacity-40 rounded-full">
                                <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </div>

                        <div class="flex-1 flex flex-col h-auto">
                            <p class="text-xs font-semibold tracking-wide text-gray-400 uppercase mb-2">{{ $product->category->name }}</p>

                            <p class="tracking-tighter text-sm truncate-2-lines mb-2 md:mb-4 text-gray-600">{{ $product->name }}</p>

                            <div class="flex-1 flex flex-col justify-end">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <p class="font-sans tabular-nums uppercase text-sm font-bold text-gray-700 mr-2">{{ $product->price }}</p>
                                        <p class="hidden md:block text-xs text-gray-400 tabular-nums line-through">{{ $product->original_price }}</p>
                                    </div>
                                    <button
                                        class="bg-yellow-300 text-xs px-4 py-1.5 rounded-full inline-flex items-center shadow">
                                        <svg class="w-4 h-4 mr-0.5 text-gray-800" xmlns="http://www.w3.org/2000/svg"
                                             fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M10.975 8L11 7.5c0-.517-.067-1.018-.181-1.5h5.993l-.564 2h-5.273zM8.5 18c-.828 0-1.5.672-1.5 1.5 0 .829.672 1.5 1.5 1.5s1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zM19.805 3l-3.432 12H5.945l-.455-1.083c-.323.049-.653.083-.99.083-.407 0-.805-.042-1.191-.114L4.615 17h13.239l3.474-12h1.929L24 3h-4.195zM13.5 18c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zM9 7.5C9 9.985 6.982 12 4.5 12 2.016 12 0 9.985 0 7.5S2.016 3 4.5 3C6.982 3 9 5.015 9 7.5zM7 7H5V5H4v2H2v1h2v2h1V8h2V7z"/>
                                        </svg>
                                        <span>Add</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white p-4 md:py-12">
        <div class="container max-w-5xl mx-auto">
            <div class="grid grid-cols-3 gap-8">
                <div class="bg-gray-200 h-40 w-full rounded-md overflow-hidden">
                    <img class="w-full h-full object-cover"
                         src="https://images.unsplash.com/photo-1559163499-413811fb2344?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2250&q=80"
                         alt="">
                </div>
                <div class="bg-gray-200 h-40 w-full rounded-md overflow-hidden">
                    <img class="w-full h-full object-cover"
                         src="https://images.unsplash.com/photo-1595341888016-a392ef81b7de?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2558&q=80"
                         alt="">
                </div>
                <div class="bg-gray-200 h-40 w-full rounded-md overflow-hidden">
                    <img class="w-full h-full object-cover"
                         src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2250&q=80"
                         alt="">
                </div>
            </div>
        </div>
    </section>

    <footer class="body-font bg-yellow-300">
        <div class="container max-w-5xl mx-auto pt-14 pb-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-5 md:text-left text-center">
                <div class="">
                    <h2 class="title-font font-semibold text-gray-800 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10 text-sm">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Medical Equipments</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Personal Care</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Medicines</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Baby Care</a>
                        </li>
                    </nav>
                </div>
                <div class="md:text-center">
                    <h2 class="title-font font-semibold text-gray-800 tracking-widest text-sm mb-3">Featured</h2>
                    <nav class="list-none mb-10 text-sm">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Kodo to Tongba</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Vaisi ko Sukuti</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Poleyko Masu</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Happy New Year</a>
                        </li>
                    </nav>
                </div>
                <div class="md:text-right">
                    <h2 class="title-font font-semibold text-gray-800 tracking-widest text-sm mb-3">IMPORTANT</h2>
                    <nav class="list-none mb-10 text-sm">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Refund Policy</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Terms & Condition</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Return & Shipping</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Help & Support</a>
                        </li>
                    </nav>
                </div>
            </div>

            <div class="flex items-center lg:ml-auto lg:mt-0 mt-6 w-full justify-center md:justify-start md:w-auto mb-4">
                <a class="text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         class="w-5 h-5"
                         viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         class="w-5 h-5"
                         viewBox="0 0 24 24">
                        <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                         stroke-width="2"
                         class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                         stroke-width="0"
                         class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none"
                              d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
            </div>
            <p class="block text-gray-500 text-sm text-center sm:text-left">© 2020 {{ $store->name }}</p>
        </div>
    </footer>

</x-layout.store>
