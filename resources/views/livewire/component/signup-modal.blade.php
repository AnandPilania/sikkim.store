<div x-data="{modal : false, toast : true}">
    <p class="text-gray-200 text-xs mb-2">{{ $subtext }}</p>
    <button type="button" x-on:click="modal = true"
            class="py-3 w-full bg-gradient-to-r from-gray-100 to-gray-100 hover:from-indigo-600 hover:to-blue-500 text-blue-700 hover:text-white max-w-full md:max-w-sm rounded-md shadow-md text-center transition ease-in-out duration-150">
        {{ $actionName }}
    </button>
    <div x-show.transition.opacity="modal"
         class="px-0 pb-0 md:pb-0 md:px-0 fixed top-0 inset-0 z-30 w-screen h-screen overlay"
         style="display: none;">
        <div class="h-full w-full flex items-end md:items-center justify-center">
            <div
                class="w-full md:w-3/5 lg:w-5/12 bg-gray-50 px-4 md:px-10 pt-10 pb-24 md:pb-10 md:rounded-md shadow-md relative font-bodyFont"
                x-on:click.away="modal = false">
                <div class="mb-4">
                    <img src="https://sikkim.store/images/logo-flat.png"
                         class="mx-auto h-20 w-20 object-cover rounded-full shadow mb-2" alt="">
                    <h2 class="font-bodyFont text-center text-lg md:text-xl tracking-wide leading-9 font-normal text-gray-900">
                        Early Access Registration
                    </h2>
                </div>
                <form class="mt-8" wire:submit.prevent="submit">
                    <input type="hidden" name="_token" value="P2eYcDcNNifeS8jB0C6ua3ZYYfmU1jJxKfpbBojp">
                    <div class="">
                        <div>
                            <input aria-label="Email address" wire:model.defer="email" name="email"
                                   type="email" value="" required=""
                                   class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300  placeholder-gray-500 text-gray-900  focus:outline-none focus:shadow-outline-blue focus:border-green-500 focus:z-10 text-base sm:text-sm sm:leading-5"
                                   placeholder="Email address">
                        </div>
                        <div class="mt-4">
                            <input aria-label="Name" wire:model.defer="name" name="name" type="text"
                                   required=""
                                   class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300  placeholder-gray-500 text-gray-900 focus:outline-none focus:shadow-outline-blue focus:border-green-500 focus:z-10 text-base sm:text-sm sm:leading-5 relative"
                                   placeholder="Full Name">
                        </div>
                        <div class="mt-4">
                            <input aria-label="Phone" wire:model.defer="phone" name="phone" type="tel"
                                   required=""
                                   class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300  placeholder-gray-500 text-gray-900 focus:outline-none focus:shadow-outline-blue focus:border-green-500 focus:z-10 text-base sm:text-sm sm:leading-5 relative"
                                   placeholder="Phone Number">
                        </div>
                        <div class="mt-4">
                            <input aria-label="Business Name" wire:model.defer="business" name="business"
                                   type="text" required=""
                                   class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300  placeholder-gray-500 text-gray-900 focus:outline-none focus:shadow-outline-blue focus:border-green-500 focus:z-10 text-base sm:text-sm sm:leading-5 relative"
                                   placeholder="Business Name">
                        </div>
                    </div>
                    <div class="mt-6">
                        <button type="submit"
                                class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-green-700 hover:bg-green-600 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700 transition duration-150 ease-in-out">
                            Sign up
                        </button>
                    </div>
                </form>

                <div
                    class="absolute right-0 top-0 mt-2 mr-2 text-black p-2 flex items-center justify-center cursor-pointer"
                    x-on:click="modal = false">
                    <svg class="w-5 h-5 text-red-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                         fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
