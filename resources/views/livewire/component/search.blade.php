<div x-data="{ search : false }">
    <button aria-label="Search Button"
            x-on:click="search = true, $nextTick(() => $refs.searchInputField.focus())"
            class="focus:outline-none text-gray-100 hover:text-red-700 transition ease-in-out duration-200">
        <svg class="w-5 h-5 md:w-7 md:h-7" xmlns="http://www.w3.org/2000/svg"
             fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
        </svg>
    </button>
    <div x-show.transition.opacity="search"
         class="fixed z-30 inset-0 flex flex-col items-center justify-start overlay w-full px-8 md:px-10 lg:px-0">
        <div class="w-full">
            <div class="max-w-3xl mx-auto w-full mt-12 sm:mt-16 md:mt-32 text-gray-300 text-xs">
                <div class="flex items-center justify-between mb-2">
                    <span>Press ESC to close.</span>
                    <svg x-on:click="{search = false, $wire.set('search', null)}"
                         class="w-6 h-6 text-gray-200 hover:text-red-700 cursor-pointer transition ease-in-out duration-200"
                         viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <form x-on:keydown.enter.prevent class="relative w-full bg-white rounded-md">
                    <input wire:model.debounce.300ms="search" name="search"
                           x-on:keydown.escape="($wire.set('search', null), search = false)"
                           x-ref="searchInputField"
                           class="w-full py-3 px-4 sm:py-5 sm:px-7 md:py-8 md:px-12 rounded-md focus:outline-none focus:shadow-none text-base md:text-xl text-brand"
                           type="text" placeholder="What are you looking for?" autocomplete="off">
                    <div class="absolute top-0 right-0 flex items-center h-full">
                        <svg wire:loading class="animate-spin h-8 w-8 text-brand mr-5"
                             fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="3"></circle>
                            <path class="opacity-75" fill="currentColor"
                                  d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </div>
                </form>
            </div>
            <div class="w-full mb-10 overflow-y-scroll mt-4">
                @if($articles)
                    @forelse( $articles as $article)
                        <a href="{{ route('article.show', $article->slug) }}"
                           class="hidden md:block max-w-3xl mx-auto w-full mt-4 py-3 px-4 sm:px-7 md:px-12 rounded-md text-brand bg-gray-200 hover:bg-white cursor-pointer group hover:shadow-2xl transform hover:scale-x-105 transition ease-in-out duration-200">
                            <h1 class="font-title text-lg mb-1 font-semibold truncate-1-lines">{{ $article->title }}</h1>
                            <h1 class="text-sm truncate-2-lines mb-2">{{ $article->summary }}</h1>
                            <h2 class="text-xs text-gray-500">In {{ $article->topic->first()->name }}
                                | {{ $article->published_at->diffForHumans() }} | {{ $article->read_time }}
                                | {{ $article->user->name }}</h2>
                        </a>
                        <a href="{{ route('article.show', $article->slug) }}"
                           class="block md:hidden max-w-3xl mx-auto w-full mt-4 py-3 px-4 sm:px-7 md:px-12 rounded-md text-brand bg-gray-200 hover:bg-white cursor-pointer group hover:shadow-2xl transition ease-in-out duration-200">
                            <h1 class="font-title text-base mb-1 font-semibold truncate-1-lines">{{ $article->title }}</h1>
                            <h1 class="text-sm truncate-2-lines mb-2 text-gray-900">{{ $article->summary }}</h1>
                            <h2 class="text-xs text-gray-500">In {{ $article->topic->first()->name }}
                                | {{ $article->published_at->diffForHumans() }} | {{ $article->read_time }}
                                | {{ $article->user->name }}</h2>
                        </a>
                    @empty
                        <div
                            class="max-w-3xl mx-auto w-full flex items-center justify-center mt-4 py-6 px-4 sm:px-7 md:px-12 rounded-md text-brand bg-gray-100">
                            <div>
                                <svg fill="none" class="w-10 h-10 mx-auto text-brand" viewBox="0 0 96 96">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M36 28.024A18.05 18.05 0 0025.022 39m34.977-10.976A18.05 18.05 0 0170.975 39"/>
                                    <ellipse cx="37.5" cy="43.5" fill="currentColor" rx="4.5" ry="7.5"/>
                                    <ellipse cx="58.5" cy="43.5" fill="currentColor" rx="4.5" ry="7.5"/>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M24.673 75.42a9.003 9.003 0 008.879 5.563m-8.88-5.562A8.973 8.973 0 0124 72c0-7.97 9-18 9-18s9 10.03 9 18a9 9 0 01-8.448 8.983m-8.88-5.562C16.919 68.817 12 58.983 12 48c0-19.882 16.118-36 36-36s36 16.118 36 36-16.118 36-36 36a35.877 35.877 0 01-14.448-3.017"/>
                                    <path fill="currentColor"
                                          d="M41.997 71.75A14.94 14.94 0 0148 70.5c2.399 0 4.658.56 6.661 1.556a3 3 0 003.999-4.066 12 12 0 00-10.662-6.49 11.955 11.955 0 00-7.974 3.032c1.11 2.37 1.917 4.876 1.972 7.217z"/>
                                </svg>
                                <h1 class="font-body text-base mb-1">Nothing found!</h1>
                            </div>
                        </div>
                    @endforelse
                @endif
            </div>
        </div>
    </div>
</div>
