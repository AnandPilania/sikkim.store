<x-layout.store title="{{ $store->name }}">
    <header class="text-gray-700 body-font bg-white shadow-md sticky top-0 z-30">
        <div class="max-w-7xl mx-auto px-8 flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a href="{{route('store.home', $store)}}"
               class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <img src="{{ $store->logo }}" class="h-10 w-10 object-cover" alt="">
                <span class="ml-3 text-xl">{{ $store->name }}</span>
            </a>
            <nav
                class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
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
                                class="absolute top-0 right-0 -mt-4 -mr-4 bg-green-500 text-xxs px-2 py-1 rounded-md text-white">
                                2
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
                       class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0">
                        Login
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                @endauth
            </div>
        </div>
    </header>

    <section class="text-gray-700 body-font bg-white">
        <div class="max-w-7xl mx-auto px-8 flex px-5 py-24 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Before they sold out
                    <br class="hidden lg:inline-block">readymade gluten
                </h1>
                <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air
                    plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken
                    authentic tumeric truffaut hexagon try-hard chambray.</p>
                <div class="flex justify-center">
                    <button
                        class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                        Buy Now
                    </button>
                    <button
                        class="ml-4 inline-flex text-gray-700 bg-gray-200 border-0 py-2 px-6 focus:outline-none hover:bg-gray-300 rounded text-lg">
                        Learn More
                    </button>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
            </div>
        </div>
    </section>

    <section class="text-gray-400 body-font bg-gray-800">
        <div class="max-w-7xl mx-auto px-8 py-16">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-200">Master Cleanse Reliac
                    Heirloom</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn
                    asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them
                    man bun deep jianbing selfies heirloom.</p>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                             src="https://dummyimage.com/600x360">
                        <div
                            class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE
                                SUBTITLE</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
                            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing
                                microdosing tousled waistcoat.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                             src="https://dummyimage.com/601x361">
                        <div
                            class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE
                                SUBTITLE</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
                            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing
                                microdosing tousled waistcoat.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                             src="https://dummyimage.com/603x363">
                        <div
                            class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE
                                SUBTITLE</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The 400 Blows</h1>
                            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing
                                microdosing tousled waistcoat.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                             src="https://dummyimage.com/602x362">
                        <div
                            class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE
                                SUBTITLE</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Neptune</h1>
                            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing
                                microdosing tousled waistcoat.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                             src="https://dummyimage.com/605x365">
                        <div
                            class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE
                                SUBTITLE</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Holden Caulfield</h1>
                            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing
                                microdosing tousled waistcoat.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                             src="https://dummyimage.com/606x366">
                        <div
                            class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE
                                SUBTITLE</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Alper Kamu</h1>
                            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing
                                microdosing tousled waistcoat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 py-16">
            <div class="p-4 text-lg sticky top-20 z-0 bg-white">
                    Featured Products
            </div>
            <div class="products">
                <div class="flex flex-wrap mb-8">
                    @foreach($products as $product)
                        <a href="{{ route('store.products.show',[$store, $product]) }}" class="lg:w-1/4 md:w-1/2 p-4 w-full group">
                            <div class="block relative h-48 rounded overflow-hidden">
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                     src="https://dummyimage.com/420x260">
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
    </section>

    <section class="bg-gray-100">
        <div class="max-w-7xl mx-auto px-8 py-16">
            <div class="p-4 text-lg sticky top-20 z-0 bg-gray-100">
                Trending Products
            </div>
            <div class="products">
                <div class="flex flex-wrap mb-8">
                    @foreach($products as $product)
                        <a href="{{ route('store.products.show',[$store, $product]) }}" class="lg:w-1/4 md:w-1/2 p-4 w-full group">
                            <div class="block relative h-48 rounded overflow-hidden">
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                     src="https://dummyimage.com/420x260">
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
    </section>

    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 py-16">
            <div class="p-4 text-lg sticky top-20 z-0 bg-white">
                Latest Products
            </div>
            <div class="products">
                <div class="flex flex-wrap mb-8">
                    @foreach($products as $product)
                        <a href="{{ route('store.products.show',[$store, $product]) }}" class="lg:w-1/4 md:w-1/2 p-4 w-full group">
                            <div class="block relative h-48 rounded overflow-hidden">
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                     src="https://dummyimage.com/420x260">
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
    </section>

    <section class="text-gray-700 body-font bg-gray-100">
        <div class="max-w-7xl mx-auto px-8 py-16 mx-auto flex flex-wrap">
            <div class="flex w-full mb-20 flex-wrap">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 lg:w-1/3 lg:mb-0 mb-4">Master Cleanse Reliac Heirloom</h1>
                <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</p>
            </div>
            <div class="flex flex-wrap md:-m-2 -m-1">
                <div class="flex flex-wrap w-1/2">
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/500x300">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/501x301">
                    </div>
                    <div class="md:p-2 p-1 w-full">
                        <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://dummyimage.com/600x360">
                    </div>
                </div>
                <div class="flex flex-wrap w-1/2">
                    <div class="md:p-2 p-1 w-full">
                        <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://dummyimage.com/601x361">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/502x302">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/503x303">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-gray-700 body-font">
        <div class="max-w-7xl mx-auto px-8 py-24">
            <div class="flex flex-wrap md:text-left text-center -mb-10 -mx-4">
                <div class="lg:w-1/6 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/6 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/6 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/6 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/6 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/6 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                    </nav>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-200">
            <div class="container px-5 py-8 flex flex-wrap mx-auto items-center">
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
                <p class="text-gray-500 text-sm text-center sm:text-left">© 2020 {{ $store->name }} —
                    <a href="" class="text-gray-600 ml-1" target="_blank"
                       rel="noopener noreferrer">@twitterhandle</a>
                </p>
                <span class="sm:ml-auto sm:mt-0 mt-2 sm:w-auto w-full sm:text-left text-center text-gray-500 text-sm">Enamel pin tousled raclette tacos irony</span>
            </div>
        </div>
    </footer>

    <section class="fixed bottom-20 right-20 flex items-center justify-center z-20">
        <a href="{{ route('home') }}" class="p-4 bg-gradient-to-tr from-teal-500 to-blue-500 rounded-full text-white shadow-lg transform hover:-translate-y-0.5">
            <svg class="w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>
        </a>
    </section>
</x-layout.store>
