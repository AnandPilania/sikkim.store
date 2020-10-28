<x-layout.store title="{{ $store->name }}">
    <header class="text-gray-700 body-font bg-white shadow-md sticky top-0 z-30">
        <div class="max-w-7xl mx-auto px-3 md:px-8 flex py-3 md:py-5 items-center justify-between">
            <div class="md:hidden">
                <svg class="w-6 text-gray-700 fill-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
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
                        <svg class="w-7 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                        </svg>
                    </a>
                @endauth
            </div>
        </div>
    </header>

    <section class="text-gray-700 body-font bg-gray-100 md:bg-white">
        <div class="max-w-7xl mx-auto flex px-5 md:px-8 py-5 md:py-24 md:flex-row flex-col flex-col-reverse items-center">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-12 md:mb-0 items-center text-left">
                <h1 class="hidden md:block mt-3 md:mt-0 title-font sm:text-4xl text-xl mb-4 font-medium text-gray-900">Before they sold out
                    <br class="hidden lg:inline-block">readymade gluten
                </h1>
                <h1 class="md:hidden mt-3 title-font text-lg mb-4 font-medium text-gray-700 truncate-1-lines">Before they sold out
                    <br class="hidden lg:inline-block">readymade gluten
                </h1>
                <p class="mb-6 md:mb-8 md:leading-relaxed text-left text-sm md:text-base">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air
                    plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken
                    authentic tumeric truffaut hexagon try-hard chambray.</p>
                <div class="flex flex-col md:flex-row justify-center md:justify-start w-full">
                    <button
                        class="mb-3 md:mb-0 inline-flex items-center justify-center text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-base md:text-lg">
                        Buy Now
                    </button>
                    <button
                        class="md:ml-4 inline-flex items-center justify-center text-gray-700 bg-gray-200 border-0 py-2 px-6 focus:outline-none hover:bg-gray-300 rounded text-base md:text-lg">
                        Learn More
                    </button>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-full">
                <img class="object-cover object-center rounded" alt="hero" src="https://picsum.photos/500?random=10">
            </div>
        </div>
    </section>

    <section class="hidden md:block text-gray-400 body-font bg-gray-800">
        <div class="max-w-7xl mx-auto px-8 py-16">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-200">Master Cleanse Reliac
                    Heirloom</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn
                    asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them
                    man bun deep jianbing selfies heirloom.</p>
            </div>
            <div class="flex flex-wrap -m-4">
                @foreach($gallery_products as $product)
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                             src="https://picsum.photos/200?random={{ $product->uuid }}">
                        <a href=""
                            class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1 uppercase"> {{ $product->category->name }}</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3 truncate-1-lines">{{ $product->name }}</h1>
                            <p class="leading-relaxed truncate-3-lines">{{ $product->description }}</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section> {{-- Gallery Top--}}

    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-8 py-5 md:py-24">
            <div class="py-2 md:py-4 text-lg md:sticky md:top-20 z-10 bg-white">
                    Featured Products
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
    </section> {{--Featured Products--}}

    <section class="bg-gray-200">
        <div class="max-w-7xl mx-auto px-5 md:px-8 py-5 md:py-24">
            <div class="py-2 md:py-4 text-lg md:sticky md:top-20 z-10 bg-gray-200">
                Trending Products
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
                                <p class="mt-1 tabular-nums mb-2">{{ $product->name }} </p>
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
    </section> {{--Trending Products--}}

    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-8 py-5 md:py-24 pb-12">
            <div class="py-2 md:py-4 text-lg md:sticky md:top-20 z-10 bg-white">
                Latest Products
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
                                <p class="mt-1 tabular-nums mb-2">{{ $product->name }} </p>
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
    </section> {{--Latest Products--}}

    <section class="text-gray-400 body-font bg-gray-800">
        <div class="max-w-7xl mx-auto px-5 md:px-8 py-10 md:py-24 flex flex-wrap">
            <div class="flex w-full mb-10 md:mb-20 flex-wrap">
                <h1 class="sm:text-3xl text-xl font-medium title-font text-gray-200 lg:w-1/3 lg:mb-0 mb-4">Master Cleanse Reliac Heirloom</h1>
                <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-sm">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</p>
            </div>
            <div class="flex flex-wrap md:-m-2 -m-1">
                <div class="flex flex-wrap w-1/2">
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://picsum.photos/500?random=1">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://picsum.photos/500?random=2">
                    </div>
                    <div class="md:p-2 p-1 w-full">
                        <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://picsum.photos/500?random=3">
                    </div>
                </div>
                <div class="flex flex-wrap w-1/2">
                    <div class="md:p-2 p-1 w-full">
                        <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://picsum.photos/500?random=4">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://picsum.photos/500?random=5">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://picsum.photos/500?random=6">
                    </div>
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

    <section class="fixed bottom-5 md:bottom-10 right-5 md:right-10 flex items-center justify-center z-20">
        <a href="{{ route('home') }}" class="p-3 md:p-4 bg-gradient-to-tr from-teal-500 to-blue-500 rounded-full text-white shadow-lg transform hover:-translate-y-0.5">
            <svg class="w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>
        </a>
    </section>
</x-layout.store>
