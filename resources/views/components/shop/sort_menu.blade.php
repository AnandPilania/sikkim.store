<div class="flex w-full md:w-64" x-data="{SortMenu : false}">
    <div class="flex-1 relative flex text-left">
        <div class="w-full">
            <div class="rounded-md shadow-sm flex">
                <button type="button" x-on:click="SortMenu =! SortMenu"
                        class="w-full flex items-center rounded-md rounded-r-none border border-gray-300 px-4 py-2 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition ease-in-out duration-150"
                        id="options-menu" aria-haspopup="true" aria-expanded="true">
                    {{ $sortName }}
                    <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                         fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd"/>
                    </svg>
                </button>
            </div>
        </div>

        <div class="origin-top-right absolute right-0 top-full w-full rounded-md drop-shadow box-shadow z-10"
             x-show="SortMenu" x-on:click.away="SortMenu = false"
             x-transition:enter="transition ease-out transform duration-100"
             x-transition:enter-start="opacity-0 scale-90"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in transform duration-75"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-90">
            <div class="rounded-md bg-white shadow-xs">
                <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                    <button type="button"
                            x-on:click="$wire.sort('name', 'Name'), SortMenu = false"
                            class="w-full text-left px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                            role="menuitem">Name
                    </button>
                    <button type="button"
                            x-on:click="$wire.sort('created_at', 'Created At'), SortMenu = false"
                            class="w-full text-left px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                            role="menuitem">Created At
                    </button>
                </div>
            </div>
        </div>
    </div>
    <button type="button" id="sort-direction" aria-haspopup="true" aria-expanded="true" wire:click="direction()"
            class="w-max inline-flex justify-center items-center w-full rounded-md rounded-l-none border border-l-0 border-gray-300 px-4 py-2 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none active:bg-gray-50 active:text-gray-800 transition ease-in-out duration-150">
        <svg class="w-5 text-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            @isset($svg)
                <path
                    d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h5a1 1 0 000-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM13 16a1 1 0 102 0v-5.586l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 101.414 1.414L13 10.414V16z"/>
            @else
                <path
                    d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h7a1 1 0 100-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z"/>
            @endif
        </svg>
    </button>
</div>
