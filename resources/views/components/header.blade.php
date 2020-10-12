<header class="fixed top-0 inset-x-0 z-10" x-data="{ open: false, modal: false }">
    <nav class="relative bg-gray-50">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="absolute inset-y-0 left-0 flex items-center md:hidden">
                    <!-- Mobile menu button-->
                    <button @click="open = !open"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-800  focus:outline-none  focus:text-gray-500 transition duration-150 ease-in-out">
                        <!-- Icon when menu is closed. -->
                        <!-- Menu open: "hidden", Menu closed: "block" -->
                        <svg x-state-on="Menu open"
                             x-state:on="Menu open"
                             x-state-off="Menu closed"
                             x-state:off="Menu closed"
                             :class="{ 'hidden': open, 'block': !open }"
                             x-bind-class="{ 'hidden': open, 'block': !open }"
                             class="block h-6 w-6"
                             stroke="currentColor"
                             fill="none"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <!-- Icon when menu is open. -->
                        <!-- Menu open: "block", Menu closed: "hidden" -->
                        <svg x-state-on="Menu open"
                             x-state:on="Menu open"
                             x-state-off="Menu closed"
                             x-state:off="Menu closed"
                             :class="{ 'hidden': !open, 'block': open }"
                             x-bind-class="{ 'hidden': !open, 'block': open }"
                             class="hidden h-6 w-6"
                             stroke="currentColor"
                             fill="none"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                <div class="flex-1 flex items-stretch sm:items-stretch sm:justify-start">
                    <a href="{{ '' }}"
                       class="flex items-center justify-between">
                        <div class="flex-shrink-0 mr-2 ml-10 md:ml-0">
                            <img src="{{ asset('sikkimstore.png') }}" class="hidden sm:block h-7" alt="">
                            <img src="{{ asset('logotextonly.png') }}" class="sm:hidden h-4" alt="">
                        </div>
                    </a>
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex">
                            <a href="{{ route('home') }}"
                               class="px-3 py-2 rounded-md text-sm  leading-5 bg-clip-text text-transparent bg-gradient-to-r @if(request()->routeIs('home')) from-teal-400 to-blue-500 font-medium @else font-normal from-gray-700 to-gray-700 @endif focus:outline-none hover:from-teal-400 hover:to-blue-500 transition duration-150 ease-in-out">
                                Home
                            </a>
                            <a href="{{ route('shops') }}"
                               class="px-3 py-2 rounded-md text-sm leading-5 bg-clip-text text-transparent bg-gradient-to-r @if(request()->routeIs('shops')) from-teal-400 to-blue-500 font-medium @else font-normal from-gray-700 to-gray-700 @endif focus:outline-none hover:from-teal-400 hover:to-blue-500 transition duration-150 ease-in-out">
                                Shops
                            </a>
                            <a href="{{ '' }}"
                               class="px-3 py-2 rounded-md text-sm leading-5 bg-clip-text text-transparent bg-gradient-to-r @if(request()->routeIs('dashboard.index')) from-teal-400 to-blue-500 font-medium @else font-normal from-gray-700 to-gray-700 @endif focus:outline-none hover:from-teal-400 hover:to-blue-500 transition duration-150 ease-in-out">
                                Getting Started
                            </a>
                            <a href="{{''}}"
                               class="px-3 py-2 rounded-md text-sm leading-5 bg-clip-text text-transparent bg-gradient-to-r @if(request()->routeIs('contact')) from-teal-400 to-blue-500 font-medium @else font-normal from-gray-700 to-gray-700 @endif focus:outline-none hover:from-teal-400 hover:to-blue-500 transition duration-150 ease-in-out">
                                Help
                            </a>
                        </div>
                    </div>
                </div>

                <div
                    class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <a href=""
                       class="mr-3 text-gray-700 hover:text-blue-500  focus:outline-none focus:text-green-500  transition duration-150 ease-in-out">
                        <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </a>

                    @auth('user')
                        <a href=""
                           class="text-gray-700 hover:text-blue-500  focus:outline-none focus:text-green-500  transition duration-150 ease-in-out">
                            <svg class="w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                            </svg>
                        </a>
                        <span
                            class="md:pl-4 md:py-2 text-sm font-medium tracking-tight leading-5 bg-clip-text text-transparent bg-gradient-to-r from-teal-500 to-blue-500 hidden md:block">
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
                                    <a href="{{ route('user.profile', auth()->guard('user')->user()->username) }}"
                                       class="block px-4 py-2 text-sm leading-5 text-gray-700 rounded-t-md hover:bg-green-500 hover:text-white focus:outline-none transition duration-150 ease-in-out">
                                        <i class="fas fa-user mr-4"></i> Your Profile </a>

                                    <a href="{{ route('user.settings', auth()->guard('user')->user()->username) }}"
                                       class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:text-white hover:bg-green-500 focus:outline-none transition duration-150 ease-in-out">
                                        <i class="fas fa-cog mr-4"></i>Settings</a>

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
                        <a href="{{ route('login') }}"
                           class="text-sm font-light leading-5  focus:outline-none transition duration-200 ease-in-out">
                            <span
                                class="hidden md:block bg-clip-text text-transparent bg-gradient-to-r from-gray-700 to-gray-700 hover:from-teal-400 hover:to-blue-500">Login/Register</span>
                            <span class="md:hidden">Login</span>
                        </a>
                    @endguest
                </div>
            </div>
        </div>

        <div x-state:on="Menu open"
             x-state:off="Menu closed"
             :class="{ 'block': open, 'hidden': !open }"
             class="hidden md:hidden">
            <div class="">
                <a href="{{ route('home') }}"
                   class="block pt-3 pb-3 pl-6 text-xm text-sm font-medium focus:outline-none focus:text-white bg-gradient-to-r @if(request()->routeIs('home')) text-white from-teal-400 to-blue-500 font-medium @else text-gray-700 from-white to-white @endif focus:from-teal-500 focus:to-blue-500 transition duration-150 ease-in-out">Home</a>
                <a href="{{ route('shops') }}"
                   class="block pt-3 pb-3 pl-6 text-xm text-sm font-medium focus:outline-none focus:text-white bg-gradient-to-r @if(request()->routeIs('shops')) text-white from-teal-400 to-blue-500 font-medium @else text-gray-700 from-white to-white @endif from-white to-white focus:from-teal-500 focus:to-blue-500 transition duration-150 ease-in-out">Shops</a>
                <a href="{{ '' }}"
                   class="block pt-3 pb-3 pl-6 text-xm text-sm font-medium focus:outline-none focus:text-white bg-gradient-to-r @if(request()->routeIs('contact')) text-white from-teal-400 to-blue-500 font-medium @else text-gray-700 from-white to-white @endif from-white to-white focus:from-teal-500 focus:to-blue-500 transition duration-150 ease-in-out">Getting
                    Started</a>
                <a href="{{ '' }}"
                   class="block pt-3 pb-3 pl-6 text-xm text-sm font-medium focus:outline-none focus:text-white bg-gradient-to-r @if(request()->routeIs('help')) text-white from-teal-400 to-blue-500 font-medium @else text-gray-700 from-white to-white @endif from-white to-white focus:from-teal-500 focus:to-blue-500 transition duration-150 ease-in-out">Help</a>
            </div>
        </div>
        <div class="absolute bottom-0 -mb-1 inset-x-0 bg-gradient-to-tr from-teal-500 to to-blue-500 h-1"></div>
    </nav>
</header>
