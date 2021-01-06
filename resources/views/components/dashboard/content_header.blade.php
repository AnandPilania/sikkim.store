<div class="flex items-center justify-between bg-white shadow-sm py-5 px-6 h-18">
    <div class="flex items-center space-x-5">
        <button class="focus:outline-none text-gray-500 hover:text-gray-800" x-on:click="SideMenu = !SideMenu">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
        <div class="relative w-64">
            <button class="px-2 py-1 bg-gray-100 font-light text-sm rounded-md text-gray-800 focus:outline-none"
                    x-on:click="CreateMenu =! CreateMenu">
                Create
                <svg class="inline w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"/>
                </svg>
            </button>
            <div x-show="CreateMenu" x-on:click.away="CreateMenu = false"
                 class="origin-bottom-left absolute bg-white drop-shadow box-shadow w-max-content text-sm rounded-md mt-1 py-2 text-gray-700">
                <a href="" class="block py-2 px-4">Action</a>
                <a href="" class="block pb-2 px-4">Another Action</a>
                <a href="" class="block pb-2 px-4">Something Else Action</a>
                <div class="border-b border-gray-200 mb-2 w-full"></div>
                <a href="" class="block pb-2 px-4">Something Else Action</a>
            </div>
        </div>
    </div>

    <div class="flex items-center space-x-5">
        <div class="flex items-center space-x-4">
            <div class="relative">
                <form action="">
                    <label>
                        <input type="text" placeholder="Search..." class="bg-white text-sm py-1.5 pl-6 pr-8 rounded-full placeholder-gray-600 focus:outline-none text-gray-700">
                    </label>
                </form>
                <div class="absolute top-0 right-0 flex items-center h-full mr-3">
                    <svg class="w-4 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <div class="relative">
                <button class="focus:outline-none flex">
                    <svg class="w-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </button>

                <div class="absolute top-0 right-0 -mr-0.5 -mt-0.5 h-2.5 w-2.5 rounded-full bg-green-500 animate-pulse"></div>
            </div>
        </div>
        <div class="relative">
            <button class="flex items-center focus:outline-none" x-on:click="profileDropdown =! profileDropdown">
                <div class="mr-1">
                    <img class="w-9 h-9 rounded-full object-cover border border-gray-200"
                         src="{{ $store->logo }}" alt="">
                </div>
                <svg class="w-4 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"/>
                </svg>
            </button>
            <div x-show.="profileDropdown"
                 x-transition:enter="transition ease-out duration-100"
                 x-transition:enter-start="transform opacity-0 scale-95"
                 x-transition:enter-end="transform opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-75"
                 x-transition:leave-start="transform opacity-100 scale-100"
                 x-transition:leave-end="transform opacity-0 scale-95"
                 x-on:click.away="profileDropdown = false"
                 class="origin-top-right absolute right-0 mt-2 mr-3 w-40 rounded-md shadow-lg z-10">
                <div class="py-1 rounded-md bg-white shadow box-shadow" role="menu" aria-orientation="vertical"
                     aria-labelledby="user-menu">
                    <a href="{{ route('store.home', $store->slug) }}" target="_blank" rel="noopener"
                       class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                       role="menuitem">My Store</a>
                    <a href="{{ route('home') }}" target="_blank" rel="noopener"
                       class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                       role="menuitem">Sikkim Store</a>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout').submit();"
                       class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                       role="menuitem">Sign out</a>
                </div>
            </div>
            <form id="logout" action="{{ route('seller.logout') }}" method="post" hidden>@csrf</form>
        </div>
    </div>
</div>
