<header x-data="{ scrollBarAtTop : true, open: false, modal: false }" class="fixed top-0 inset-x-0 z-10" @scroll.window="scrollBarAtTop = (window.pageYOffset > 20) ? false : true">
    <nav class="relative" :class="{'py-3 sm:py-4 md:py-6 bg-white md:bg-transparent' : scrollBarAtTop, 'bg-white shadow py-3 sm:py-3 md:py-4' : !scrollBarAtTop}">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between">
                <div class="md:hidden mr-4">

                    <!-- Mobile menu button-->
                    <button @click="open = !open" class="inline-flex items-center justify-center py-2 rounded-md text-gray-600 hover:text-gray-800  focus:outline-none  focus:text-gray-800 transition duration-150 ease-in-out">

                        <!-- Icon when menu is closed. -->
                        <!-- Menu open: "hidden", Menu closed: "block" -->
                        <svg x-state-on="Menu open" x-state:on="Menu open" x-state-off="Menu closed" x-state:off="Menu closed" :class="{ 'hidden': open, 'block': !open }" x-bind-class="{ 'hidden': open, 'block': !open }" class="block h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>

                        <!-- Icon when menu is open. -->
                        <!-- Menu open: "block", Menu closed: "hidden" -->
                        <svg x-state-on="Menu open" x-state:on="Menu open" x-state-off="Menu closed" x-state:off="Menu closed" :class="{ 'hidden': !open, 'block': open }" x-bind-class="{ 'hidden': !open, 'block': open }" class="hidden h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>

                    </button>
                </div>

                <div class="flex-1 flex items-baseline md:space-x-14">

                    <a href="{{ route('home') }}" class="leading-none relative block w-max text-2xl font-bold tracking-tighter focus:outline-none transform hover:scale-105 transition ease-in-out duration-200">
                        <p class="group bg-clip-text text-transparent bg-gradient-to-tr from-blue-600 to-green-600">Sikkim.<span class="text-sm font-light text-gray-500 group-hover:text-green-600">store</span></p>
                    </a>

                    <div class="hidden sm:flex items-center space-x-12 text-sm text-gray-500">
                            <a href="{{ route('home') }}" class="hidden md:block hover:text-blue-600 @if(request()->routeIs('home')) text-blue-700 font-medium @endif">Home</a>
                            <a href="{{ route('shops') }}" class="hidden md:block hover:text-blue-600 @if(request()->routeIs('shops')) text-blue-700 font-medium @endif">Shops</a>
                            <livewire:contact-us/>
                            <a href="" class="hidden md:block hover:text-blue-600">Help</a>
                    </div>
                </div>

                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                    @auth('user')
                        <a href=""
                           class="text-gray-700 hover:text-blue-500  focus:outline-none focus:text-green-500  transition duration-150 ease-in-out">
                            <svg class="w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                            </svg>
                        </a>
                        <span
                            class="md:pl-4 md:py-2 text-sm font-medium tracking-tight text-gray-700 hidden md:block">
                            {{auth()->user()->name}}
                        </span>

                        <div class="ml-3 relative"
                             x-data="{ isOpen: false }">
                            <div>
                                <button
                                    class="flex text-sm rounded-full overflow-hidden focus:outline-none  border-white focus:border-indigo-500 transition duration-150 ease-in-out"
                                    @click="isOpen = !isOpen"
                                    @keydown.escape="isOpen = false">
                                    <img class="h-8 w-8 rounded-full object-cover border border-gray-500 hover:border-indigo-800"
                                         src="{{ auth('user')->user()->avatar }}"
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
                                <div class="rounded-md bg-white box-shadow">
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
                    @endauth

                    @guest()
                        <div class="hidden md:block">
                            <a href="{{ route('login') }}" class="mr-6 focus:outline-none hover:text-blue-700">Login</a>
                            <a href="{{ route('register') }}" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 font-medium rounded-md text-gray-100 hover:text-white focus:text-white transform hover:scale-105 transition ease-in-out duration-200">Register</a>
                        </div>
                        <div class="md:hidden">
                            <a href="{{ route('login') }}" class="focus:outline-none hover:text-blue-700">Login</a>
                        </div>
                    @endguest
                </div>
            </div>
        </div>

        <div x-state:on="Menu open"
             x-state:off="Menu closed"
             :class="{ 'block': open, 'hidden': !open }"
             class="hidden md:hidden">
            <div class="bg-white">
                <a href="{{ route('home') }}" class="block pt-3 pb-3 pl-6 text-xm text-sm font-medium focus:outline-none focus:text-white bg-gradient-to-r @if(request()->routeIs('home')) text-white from-green-400 to-blue-500 font-medium @else text-gray-700 from-white to-white @endif focus:from-green-500 focus:to-blue-500 transition duration-150 ease-in-out">Home</a>
                <a href="{{ route('shops') }}" class="block pt-3 pb-3 pl-6 text-xm text-sm font-medium focus:outline-none focus:text-white bg-gradient-to-r @if(request()->routeIs('shops')) text-white from-green-400 to-blue-500 font-medium @else text-gray-700 from-white to-white @endif from-white to-white focus:from-green-500 focus:to-blue-500 transition duration-150 ease-in-out">Shops</a>
                <a href="{{ '' }}" class="block pt-3 pb-3 pl-6 text-xm text-sm font-medium focus:outline-none focus:text-white bg-gradient-to-r @if(request()->routeIs('contact')) text-white from-green-400 to-blue-500 font-medium @else text-gray-700 from-white to-white @endif from-white to-white focus:from-green-500 focus:to-blue-500 transition duration-150 ease-in-out">Getting Started</a>
                <a href="{{ '' }}" class="block pt-3 pb-3 pl-6 text-xm text-sm font-medium focus:outline-none focus:text-white bg-gradient-to-r @if(request()->routeIs('help')) text-white from-green-400 to-blue-500 font-medium @else text-gray-700 from-white to-white @endif from-white to-white focus:from-green-500 focus:to-blue-500 transition duration-150 ease-in-out">Help</a>
            </div>
        </div>
    </nav>
</header>
