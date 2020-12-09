<x-layout.store title="{{ $store->name }}">

    <section class="hidden lg:block bg-white text-gray-500 py-4">
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
    <section class="hidden lg:block bg-white pb-8 pt-4">
        <div class="container max-w-5xl mx-auto flex justify-between items-center">
            <a href="{{route('store.home', $store)}}" class="flex-none">
                <img src="{{ $store->logo }}" class="w-16 h-16 object-cover" alt="{{ $store->name }}">
            </a>
            <div
                class="flex flex-auto mx-6 items-center text-xs rounded-md overflow-hidden bg-gray-50 h-13 shadow max-w-xl">
                <div
                    class="py-4 px-5 flex items-center justify-between border-r border-gray-200 text-gray-600 flex-none">
                    <div class="mr-8">All Categories</div>
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>
                <div class="relative flex-1">
                    <label>
                        <input type="text" placeholder="What are we looking for.... (Press '/' to focus)"
                               aria-label="Search" class="w-full bg-gray-50 focus:outline-none px-4">
                    </label>
                </div>
            </div>
            <div class="flex items-center space-x-4 flex-none">
                @auth('user')
                    <div class="flex items-center bg-gray-100 p-4 rounded-md h-13 shadow">
                        <div class="text-xs capitalize font-medium tabular-nums">₹ 1245.00</div>
                        <div class="relative ml-2">
                            <svg class="w-4 h-4 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            <div
                                class="absolute top-0 left-0 -mt-2.5 ml-2 text-xxs rounded-full bg-yellow-300 h-3 w-auto p-1 flex items-center justify-center">
                                345
                            </div>
                        </div>
                    </div>

                    <a href=""
                       class="bg-gray-100 h-13 w-13 flex items-center justify-center rounded-md shadow mx-3 group focus:outline-none focus:text-green-500  transition duration-150 ease-in-out">
                        <div class="relative animate-bounce">
                            <svg class="w-5 text-gray-600 group-hover:text-yellow-500"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                            </svg>
                            <div
                                class="absolute top-0 left-0 -mt-2 ml-3 text-xxs rounded-full bg-yellow-300 h-3 w-auto p-1 flex items-center justify-center">
                                12
                            </div>
                        </div>

                    </a>

                    <div class="ml-3 relative"
                         x-data="{ isOpen: false }">
                        <div class="h-13 w-13 bg-gray-100 flex items-center justify-center rounded-md shadow">
                            <button
                                class="flex text-sm rounded-full overflow-hidden focus:outline-none  border-white focus:border-indigo-500 transition duration-150 ease-in-out"
                                @click="isOpen = !isOpen"
                                @keydown.escape="isOpen = false">
                                <img
                                    class="h-8 w-8 rounded-full object-cover border border-gray-500 hover:border-indigo-800"
                                    src="{{'https://ui-avatars.com/api/?background=0D8ABC&color=fff&name='.auth()->user()->name}}"
                                    alt=""/>
                            </button>
                        </div>
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
                    <button class="text-sm py-4 px-5 bg-yellow-300 hover:bg-yellow-400 rounded-md h-13 shadow">
                        Sign up / Sign in
                    </button>
                @endauth
            </div>
        </div>
    </section>
    <section class="hidden lg:block bg-yellow-300 h-16 sticky top-0 z-10">
        <div class="container max-w-5xl mx-auto flex justify-between items-center h-full text-gray-700">
            <div class="flex items-center justify-between">
                <div class="inline-flex items-center">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                    </svg>
                    <div class="text-xs">All Categories</div>
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
                <div class="text-xs">Medicines</div>
            </div>

            <div class="inline-flex items-center">
                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
                <div class="text-xs">Personal Care</div>
            </div>
            <div class="inline-flex items-center">
                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                </svg>
                <div class="text-xs">Medical Equipments</div>
            </div>
            <div class="inline-flex items-center">
                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <defs/>
                    <path
                        d="M21.174 8.205C20.747 3.262 17.092 1 12 1 6.857 1 3.249 3.311 2.826 8.205.8 8.347 0 10.284 0 12.426c0 1.888.861 4.627 3.176 5.159C4.369 21.131 7.405 23 12 23s7.631-1.869 8.824-5.415C23.139 17.053 24 14.314 24 12.426c0-2.128-.794-4.079-2.826-4.221zm-1.141 7.471c-.449.009-.836.315-.949.749C18.297 19.461 15.914 21 12 21s-6.297-1.539-7.083-4.575c-.113-.434-.5-.74-.949-.749-2.135-.041-2.438-4.65-1.336-5.367.272-.177.614-.104.756-.041.671.3 1.427-.207 1.406-.941-.071-2.526.931-4.647 3.23-5.706-.663 2.823 2.205 5.638 6.672 4.598-4.012-1.098-1.056-6.221 2.352-3.954 1.608 1.217 2.214 3.072 2.16 5.063-.021.739.743 1.239 1.406.941.142-.064.483-.137.756.041 1.101.716.798 5.325-1.337 5.366zM16.5 11.5c0 .828-.56 1.5-1.25 1.5S14 12.328 14 11.5s.56-1.5 1.25-1.5 1.25.672 1.25 1.5zM8.75 13c-.69 0-1.25-.672-1.25-1.5S8.06 10 8.75 10s1.25.672 1.25 1.5S9.44 13 8.75 13zM8 16h8s-.844 2.875-4 2.875C8.75 18.875 8 16 8 16z"/>
                </svg>
                <div class="text-xs">Baby Care</div>
            </div>
            <div class="text-gray-900 uppercase text-sm font-medium">
                Daily Deals
            </div>
        </div>
    </section>

    <section class="lg:hidden bg-white h-14 sticky top-0 shadow z-10">
        <div class="container max-w-5xl mx-auto h-full text-gray-700">
            <div class="py-2 px-4 flex items-center h-full">
                <a href="{{ route('store.home', [$store]) }}" class="w-8 h-8 flex-none">
                    <img src="{{ $store->logo }}" alt="">
                </a>
                <div class="flex-auto flex justify-end items-center space-x-4">
                    <div>
                        <svg class="w-6 h-6 text-orange-500" fill="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                        </svg>
                    </div>
                    @auth('user')
                        <div>
                            <svg class="h-5 w-5 text-orange-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path
                                    d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                            </svg>
                        </div>
                        <div>
                            <svg class="w-6 h-6 text-orange-500" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <g fill="currentColor" fill-rule="evenodd">
                                    <path
                                        d="m5.948 6.447c0 1.861 1.552 3.369 3.467 3.369 1.914 0 3.466-1.509 3.466-3.369 0-1.862-1.552-3.37-3.466-3.37-1.915 0-3.467 1.509-3.467 3.37m8.289 5.682c-.121-.041-.245-.075-.37-.102 0 0-1.153-.456-4.367-.456-3.214 0-4.367.456-4.367.456-1.735.343-3.133 2.108-3.133 3.878v2.095h9.357c-.229-.525-.357-1.105-.357-1.714 0-2.01 1.377-3.689 3.237-4.157m.215 5.623l.55.555.532-.573 2.973-3.2c.282-.303.264-.778-.039-1.06-.303-.282-.778-.264-1.06.039l-2.406 2.486-.698-.528c-.292-.294-.766-.297-1.061-.005-.294.292-.297.766-.005 1.061l1.213 1.225"></path>
                                </g>
                            </svg>
                        </div>
                    @else
                        <div class="text-sm bg-orange-500 text-white px-2 py-1 rounded-md">
                            Login
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </section>


    <section class="text-gray-700 body-font overflow-hidden bg-white">
        <div class="max-w-5xl mx-auto px-5 py-5 md:pt-24 md:pb-12 lg:px-0">
            <div class="mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-72 object-cover object-center rounded"
                     src="{{ $product->featured_image }}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest uppercase">{{ $product->category_name }}</h2>
                    <h1 class="text-gray-900 md:text-3xl text-lg title-font font-medium mb-2 capitalize">{{ $product->name }}</h1>
                    <div class="flex mb-4">
                        <div class="flex items-center">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2"
                                 class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <div class="text-gray-600 ml-3">4 Reviews</div>
                        </div>

                        <div class="hidden md:flex ml-3 pl-3 py-2 border-l-2 border-gray-200">
                            <a class="text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                     class="w-5 h-5"
                                     viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                            </a>
                            <a class="ml-2 text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                     class="w-5 h-5"
                                     viewBox="0 0 24 24">
                                    <path
                                        d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                </svg>
                            </a>
                            <a class="ml-2 text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                     class="w-5 h-5"
                                     viewBox="0 0 24 24">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <p class="leading-relaxed truncate-3-lines">{{ $product->description }}</p>
                    <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 md:mb-5">
                        <div class="flex">
                            <div class="mr-3">Color</div>
                            <button class="border-2 border-gray-300 rounded-full w-6 h-6 focus:outline-none"></button>
                            <button
                                class="border-2 border-gray-300 ml-1 bg-gray-700 rounded-full w-6 h-6 focus:outline-none"></button>
                            <button
                                class="border-2 border-gray-300 ml-1 bg-indigo-500 rounded-full w-6 h-6 focus:outline-none"></button>
                        </div>
                        <div class="flex ml-6 items-center">
                            <div class="mr-3">Size</div>
                            <div class="relative">
                                <label>
                                    <select
                                        class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-indigo-500 text-base pl-3 pr-10">
                                        <option>SM</option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XL</option>
                                    </select>
                                </label>
                                <div
                                    class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                         stroke-linejoin="round" stroke-width="2"
                                         class="w-4 h-4" viewBox="0 0 24 24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex items-center justify-between md:justify-start md:space-x-4 lg:space-x-0 lg:justify-between">
                        <div
                            class="title-font font-medium text-2xl text-gray-900 mt-4 md:mt-0 font-sans tabular-nums">{{ $product->price }}</div>
                        <button
                            class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 focus:outline-none">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 class="w-5 h-5" viewBox="0 0 24 24">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                            </svg>
                        </button>
                        <div class="hidden md:flex space-x-2">
                            <button
                                class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">
                                Add to Cart
                            </button>
                            <button
                                class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">
                                Buy Now
                            </button>
                        </div>
                    </div>
                    <div>
                        <div class="md:hidden mt-4 pb-12">
                            <button
                                class="mb-3 w-full text-white bg-indigo-500 border-0 py-2.5 px-6 focus:outline-none hover:bg-indigo-600 rounded">
                                Add to Cart
                            </button>
                            <button
                                class="w-full text-white bg-green-500 border-0 py-2.5 px-6 focus:outline-none hover:bg-green-600 rounded">
                                Buy Now
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mt-8 md:mt-12 prose">
                    <h3 class="text-lg">Product Details:</h3>
                    <p>{{ $product->description }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="max-w-5xl mx-auto px-5 lg:px-0 py-5">
            <div class="py-2 md:py-4 text-xl font-semibold tracking-wide mb-2 md:mb-4">
                Reviews:
            </div>
            <div class="mb-4 md:mb-8 px-2 md:px-0">
                <div class="flex flex-col md:flex-row md:items-center mb-2">
                    <div
                        class="px-2  mb-1 md:mb-0 mr-4 py-0.5 bg-green-700 rounded-md text-white text-xs font-semibold inline-flex items-center w-max-content">
                        4.5
                        <svg class="w-3 h-3 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <div class="font-semibold text-gray-700 text-sm md:text-base">Value for Money</div>
                </div>
                <p class="text-gray-700 leading-relaxed mb-2 text-sm md:text-base">
                    i have purchased on 06.08.2020 and flipkirt has been send on led Tv on next day and my Tv was
                    installed on 08.08.2020. The service was Good and Satisfactory.
                    The Tv Clearity has awesome.
                    The Sound was also Great.
                    Features are easy and Good.
                    I have sughest all to purchase Value for money.
                </p>
                <div class="flex flex-col md:flex-row md:items-center justify-between text-gray-500">
                    <div class="flex flex-col md:flex-row md:items-center md:space-x-4 space-y-1 md:space-y-0">
                        <div class="inline-flex items-center">
                            <span class="text-xs md:text-sm font-medium">Kuldeep Bandrash</span>
                            <svg class="ml-1.5 mr-0.5 text-green-500 w-3 h-3 md:w-4 md:h-4" viewBox="0 0 12 12"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <circle cx="6" cy="6" r="6" fill="currentColor"></circle>
                                    <path stroke="#ffffff" stroke-width="1.5px" d="M3 6l2 2 4-4" fill="#878787"></path>
                                </g>
                            </svg>
                            <span class="text-xs md:text-sm">Certified Buyer</span>,
                        </div>
                        <div class="hidden md:flex items-center space-x-4">
                            <div class="inline-flex items-center">
                                <svg class="w-3 h-3 md:w-4 md:h-4 text-pink-500 mr-0.5" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                          clip-rule="evenodd"/>
                                </svg>
                                <span class="text-xs md:text-sm">North West District</span>
                            </div>
                            <div class="inline-flex items-center text-xs md:text-sm">
                                <svg class="w-3 h-3 md:w-4 md:h-4 text-indigo-500 mr-0.5" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                          clip-rule="evenodd"/>
                                </svg>
                                3 months ago
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4 text-xs md:text-sm font-medium font-sans mt-2 md:mt-0">
                        <div class="inline-flex items-center">
                            <svg class="w-3 h-3 md:w-4 md:h-4 text-blue-500 mr-1" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"/>
                            </svg>
                            <div>237</div>
                        </div>
                        <div class="inline-flex items-center">
                            <div>145</div>
                            <svg class="w-3 h-3 md:w-4 md:h-4 text-red-600 ml-1" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M18 9.5a1.5 1.5 0 11-3 0v-6a1.5 1.5 0 013 0v6zM14 9.667v-5.43a2 2 0 00-1.105-1.79l-.05-.025A4 4 0 0011.055 2H5.64a2 2 0 00-1.962 1.608l-1.2 6A2 2 0 004.44 12H8v4a2 2 0 002 2 1 1 0 001-1v-.667a4 4 0 01.8-2.4l1.4-1.866a4 4 0 00.8-2.4z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="w-full bg-gray-200 mt-3 md:mt-4" style="height: 1px"></div>
            </div>
            <div class="mb-4 md:mb-8 px-2 md:px-0">
                <div class="flex flex-col md:flex-row md:items-center mb-2">
                    <div
                        class="px-2  mb-1 md:mb-0 mr-4 py-0.5 bg-green-700 rounded-md text-white text-xs font-semibold inline-flex items-center w-max-content">
                        4.5
                        <svg class="w-3 h-3 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <div class="font-semibold text-gray-700 text-sm md:text-base">Value for Money</div>
                </div>
                <p class="text-gray-700 leading-relaxed mb-2 text-sm md:text-base">
                    i have purchased on 06.08.2020 and flipkirt has been send on led Tv on next day and my Tv was
                    installed on 08.08.2020. The service was Good and Satisfactory.
                    The Tv Clearity has awesome.
                    The Sound was also Great.
                    Features are easy and Good.
                    I have sughest all to purchase Value for money.
                </p>
                <div class="flex flex-col md:flex-row md:items-center justify-between text-gray-500">
                    <div class="flex flex-col md:flex-row md:items-center md:space-x-4 space-y-1 md:space-y-0">
                        <div class="inline-flex items-center">
                            <span class="text-xs md:text-sm font-medium">Kuldeep Bandrash</span>
                            <svg class="ml-1.5 mr-0.5 text-green-500 w-3 h-3 md:w-4 md:h-4" viewBox="0 0 12 12"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <circle cx="6" cy="6" r="6" fill="currentColor"></circle>
                                    <path stroke="#ffffff" stroke-width="1.5px" d="M3 6l2 2 4-4" fill="#878787"></path>
                                </g>
                            </svg>
                            <span class="text-xs md:text-sm">Certified Buyer</span>,
                        </div>
                        <div class="hidden md:flex items-center space-x-4">
                            <div class="inline-flex items-center">
                                <svg class="w-3 h-3 md:w-4 md:h-4 text-pink-500 mr-0.5" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                          clip-rule="evenodd"/>
                                </svg>
                                <span class="text-xs md:text-sm">North West District</span>
                            </div>
                            <div class="inline-flex items-center text-xs md:text-sm">
                                <svg class="w-3 h-3 md:w-4 md:h-4 text-indigo-500 mr-0.5" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                          clip-rule="evenodd"/>
                                </svg>
                                3 months ago
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4 text-xs md:text-sm font-medium font-sans mt-2 md:mt-0">
                        <div class="inline-flex items-center">
                            <svg class="w-3 h-3 md:w-4 md:h-4 text-blue-500 mr-1" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"/>
                            </svg>
                            <div>237</div>
                        </div>
                        <div class="inline-flex items-center">
                            <div>145</div>
                            <svg class="w-3 h-3 md:w-4 md:h-4 text-red-600 ml-1" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M18 9.5a1.5 1.5 0 11-3 0v-6a1.5 1.5 0 013 0v6zM14 9.667v-5.43a2 2 0 00-1.105-1.79l-.05-.025A4 4 0 0011.055 2H5.64a2 2 0 00-1.962 1.608l-1.2 6A2 2 0 004.44 12H8v4a2 2 0 002 2 1 1 0 001-1v-.667a4 4 0 01.8-2.4l1.4-1.866a4 4 0 00.8-2.4z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="w-full bg-gray-200 mt-3 md:mt-4" style="height: 1px"></div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="max-w-5xl mx-auto px-5 lg:px-0 py-5 md:py-12">
            <div class="py-2 md:py-4 text-xl font-semibold tracking-wide">
                Questions and Answers:
            </div>
            <div class="">
                Review goes here
            </div>
        </div>
    </section>

    {{--    <section class="bg-gray-200">--}}
    {{--        <div class="max-w-5xl mx-auto px-5 lg:px-0 py-5 md:py-12">--}}
    {{--            <div class="py-2 md:py-4 text-lg mb-8">--}}
    {{--                Products you may like--}}
    {{--            </div>--}}
    {{--            <div class="products mt-6 md:mt-3">--}}
    {{--                <div class="grid grid-cols-1 md:grid-cols-4 gap-12 md:gap-10">--}}
    {{--                    @foreach($related_products as $product)--}}
    {{--                        <a href="{{ route('store.products.show',[$store, $product]) }}" class="group">--}}
    {{--                            <div class="block relative h-48 rounded overflow-hidden">--}}
    {{--                                <img alt="ecommerce" class="object-cover object-center w-full h-full block"--}}
    {{--                                     src="https://picsum.photos/200?random={{ $product->uuid }}">--}}
    {{--                            </div>--}}
    {{--                            <div class="mt-4">--}}
    {{--                                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1 uppercase">{{ $product->category->name }}</h3>--}}
    {{--                                <p class="mt-1 tabular-nums mb-2 truncate-1-lines">{{ $product->name }} </p>--}}
    {{--                                <h2 class="font-sans text-gray-900 title-font text-lg font-medium">{{ $product->price }}--}}
    {{--                                    <div--}}
    {{--                                        class="text-gray-500 text-sm line-through ml-2">{{ $product->original_price }}</div>--}}
    {{--                                </h2>--}}
    {{--                            </div>--}}
    {{--                        </a>--}}
    {{--                    @endforeach--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    {{--    <footer class="body-font bg-yellow-300">--}}
    {{--        <div class="container max-w-5xl mx-auto pt-14 pb-8">--}}
    {{--            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-5 md:text-left text-center">--}}
    {{--                <div class="">--}}
    {{--                    <h2 class="title-font font-semibold text-gray-800 tracking-widest text-sm mb-3">CATEGORIES</h2>--}}
    {{--                    <nav class="list-none mb-10 text-sm">--}}
    {{--                        <li>--}}
    {{--                            <a class="text-gray-600 hover:text-gray-800">First Link</a>--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <a class="text-gray-600 hover:text-gray-800">Second Link</a>--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>--}}
    {{--                        </li>--}}
    {{--                    </nav>--}}
    {{--                </div>--}}
    {{--                <div class="md:text-center">--}}
    {{--                    <h2 class="title-font font-semibold text-gray-800 tracking-widest text-sm mb-3">CATEGORIES</h2>--}}
    {{--                    <nav class="list-none mb-10 text-sm">--}}
    {{--                        <li>--}}
    {{--                            <a class="text-gray-600 hover:text-gray-800">First Link</a>--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <a class="text-gray-600 hover:text-gray-800">Second Link</a>--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>--}}
    {{--                        </li>--}}
    {{--                    </nav>--}}
    {{--                </div>--}}
    {{--                <div class="md:text-right">--}}
    {{--                    <h2 class="title-font font-semibold text-gray-800 tracking-widest text-sm mb-3">CATEGORIES</h2>--}}
    {{--                    <nav class="list-none mb-10 text-sm">--}}
    {{--                        <li>--}}
    {{--                            <a class="text-gray-600 hover:text-gray-800">First Link</a>--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <a class="text-gray-600 hover:text-gray-800">Second Link</a>--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>--}}
    {{--                        </li>--}}
    {{--                    </nav>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </footer>--}}
    <section class="py-10">
        <div class="container max-w-5xl mx-auto py-4 flex flex-wrap mx-auto items-center">
            <div class="flex md:flex-no-wrap flex-wrap justify-center md:justify-start">
                <label>
                    <input
                        class="sm:w-64 w-40 bg-gray-100 rounded sm:mr-4 mr-2 border border-gray-400 focus:outline-none focus:border-indigo-500 text-base py-2 px-4"
                        placeholder="Placeholder" type="text">
                </label>
                <button
                    class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">
                    Button
                </button>
                <p class="text-gray-500 text-sm md:ml-6 md:mt-0 mt-2 sm:text-left text-center">Bitters chicharrones
                    fanny pack
                    <br class="lg:block hidden">waistcoat green juice
                </p>
            </div>
            <span class="inline-flex lg:ml-auto lg:mt-0 mt-6 w-full justify-center md:justify-start md:w-auto">
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
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
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
            </span>
        </div>
        <div class="container max-w-5xl mx-auto flex flex-wrap flex-col sm:flex-row">
            <p class="text-gray-500 text-sm text-center sm:text-left">© 2020 {{ $store->name }}
            </p>
        </div>
    </section>
</x-layout.store>
