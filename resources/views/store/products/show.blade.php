<x-layout.store title="{{ $store->name }}">

    <header class="text-gray-700 body-font bg-white shadow-md sticky top-0 z-30">
        <div class="max-w-7xl mx-auto px-3 md:px-8 flex py-3 md:py-5 items-center justify-between">
            <div class="md:hidden">
                <svg class="w-6 text-gray-700 fill-current" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/>
                </svg>
            </div>
            <a href="{{route('store.home', $store)}}"
               class="flex title-font font-medium items-center text-gray-900">
                <img src="{{ $store->logo }}" class="h-5 md:h-10 w-5 md:w-10 object-cover" alt="">
                <span class="ml-3 text-base md:text-xl text-gray-700">{{ $store->name }}</span>
            </a>
            <nav
                class="hidden md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	md:flex flex-wrap items-center text-base justify-center">
                @foreach($categories as $category)
                    <a class="mr-5 hover:text-gray-900">{{ $category->name }}</a>
                @endforeach
            </nav>
            <div class="flex items-center">
                @auth('user')
                    <button class="focus:outline-none mr-3">
                        <div class="relative">
                            <svg class="w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                            </svg>
                            <div
                                class="absolute top-0 right-0 -mt-4 -mr-4 bg-green-500 text-xxs px-1 py-0.5 rounded-md text-white">
                                234
                            </div>
                        </div>
                    </button>
                    <a href=""
                       class="mx-3 text-gray-700 hover:text-blue-500  focus:outline-none focus:text-green-500  transition duration-150 ease-in-out">
                        <svg class="w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                        </svg>
                    </a>

                    <div class="ml-3 relative"
                         x-data="{ isOpen: false }">
                        <div>
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
                @else
                    <a href="{{ route('login') }}"
                       class="hidden md:inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base">
                        Login
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                    <a href="{{ route('login') }}"
                       class="md:hidden inline-flex items-center border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base">
                        <svg class="w-7 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a>
                @endauth
            </div>
        </div>
    </header>

    <section class="text-gray-700 body-font overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-8 py-5 md:py-24">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-72 object-cover object-center rounded"
                     src="https://picsum.photos/500?random=6">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest uppercase">{{ $product->category->name }}</h2>
                    <h1 class="text-gray-900 md:text-3xl text-lg title-font font-medium mb-2 capitalize">{{ $product->name }}</h1>
                    <div class="flex mb-4">
                        <span class="flex items-center">
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
                            <span class="text-gray-600 ml-3">4 Reviews</span>
                        </span>

                        <span class="hidden md:flex ml-3 pl-3 py-2 border-l-2 border-gray-200">
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
                        </span>
                    </div>
                    <p class="leading-relaxed">{{ $product->description }}</p>
                    <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 md:mb-5">
                        <div class="flex">
                            <span class="mr-3">Color</span>
                            <button class="border-2 border-gray-300 rounded-full w-6 h-6 focus:outline-none"></button>
                            <button
                                class="border-2 border-gray-300 ml-1 bg-gray-700 rounded-full w-6 h-6 focus:outline-none"></button>
                            <button
                                class="border-2 border-gray-300 ml-1 bg-indigo-500 rounded-full w-6 h-6 focus:outline-none"></button>
                        </div>
                        <div class="flex ml-6 items-center">
                            <span class="mr-3">Size</span>
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
                                <span
                                    class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                         class="w-4 h-4" viewBox="0 0 24 24">
                                      <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                  </span>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <span class="title-font font-medium text-2xl text-gray-900">$58.00</span>
                        <button
                            class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 class="w-5 h-5" viewBox="0 0 24 24">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                            </svg>
                        </button>
                        <div class="hidden md:flex space-x-1">
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
                                class="mb-2 w-full text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">
                                Add to Cart
                            </button>
                            <button
                                class="w-full text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">
                                Buy Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-8 py-5 md:py-24">
            <div class="py-2 md:py-4 text-lg md:sticky md:top-20 z-10 bg-white">
                Products you may like
            </div>
            <div class="products mt-6 md:mt-3">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-12 md:gap-10">
                    @foreach($products as $product)
                        <a href="{{ route('store.products.show',[$store, $product]) }}" class="group">
                            <div class="block relative h-48 rounded overflow-hidden">
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                     src="https://picsum.photos/200?random={{ $product->uuid }}">
                            </div>
                            <div class="mt-4">
                                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1 uppercase">{{ $product->category->name }}</h3>
                                <p class="mt-1 tabular-nums mb-2 truncate-1-lines">{{ $product->name }} </p>
                                <h2 class="font-sans text-gray-900 title-font text-lg font-medium">{{ $product->price }}
                                    <span
                                        class="text-gray-500 text-sm line-through ml-2">{{ $product->original_price }}</span>
                                </h2>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <footer class="text-gray-300 body-font bg-black">
        <div class="max-w-7xl mx-auto px-5 md:px-8 py-14 md:py-24">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-5 md:text-left text-center">
                <div class="">
                    <h2 class="title-font font-medium text-gray-200 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10 text-sm md:text-base">
                        <li>
                            <a class="text-gray-400 hover:text-gray-300">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-400 hover:text-gray-300">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-400 hover:text-gray-300">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-400 hover:text-gray-300">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="md:text-center">
                    <h2 class="title-font font-medium text-gray-200 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10 text-sm md:text-base">
                        <li>
                            <a class="text-gray-400 hover:text-gray-300">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-400 hover:text-gray-300">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-400 hover:text-gray-300">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-400 hover:text-gray-300">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="md:text-right">
                    <h2 class="title-font font-medium text-gray-200 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-400 hover:text-gray-300">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-400 hover:text-gray-300">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-400 hover:text-gray-300">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-400 hover:text-gray-300">Fourth Link</a>
                        </li>
                    </nav>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-800">
            <div class="max-w-7xl mx-auto px-5 md:px-8 px-5 py-4 flex flex-wrap mx-auto items-center">
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
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
               viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
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
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0"
               class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none"
                  d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
            </div>
        </div>
        <div class="bg-gray-200">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-gray-500 text-sm text-center sm:text-left">© 2020 {{ $store->name }}
                </p>
            </div>
        </div>
    </footer>

</x-layout.store>
