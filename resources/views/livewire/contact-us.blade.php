<div x-data="{ contactModal: false }" x-on:message-sent.window="contactModal = false" class="w-full md:w-max">

    <!--Contact Button-->
    <a href="" id="contactButton" @click.prevent="contactModal = true" x-ref="contactButton" class="hidden md:block hover:text-blue-600">Contact</a>

    <!--Contact Modal Starts-->
    <div x-show.immediate="contactModal, $nextTick(() => $refs.inputName.focus())" class="fixed inset-0 bg-black bg-opacity-80 z-10 flex items-end md:items-center justify-center bg-blur px-2 md:px-0 pb-2 md:pb-0">

        <div x-show.transition.duration.300="contactModal" class="relative max-w-lg w-full p-4 md:p-10 bg-white rounded-md text-left" @click.away="contactModal = false" @keydown.window.escape="contactModal = false">
            <p class="uppercase text-blue-600 font-bold mb-6 text-center">Contact</p>

            <form action="" class="text-gray-700">
                <div>
                    <div>
                        <label for="name" class="text-sm font-medium text-gray-700">Full Name:</label>
                    </div>
                    <div class="mt-1">
                        <input x-ref="inputName" wire:model.defer="name" type="text" id="name"
                               placeholder="e.g. John Doe"
                               class="w-full rounded-md border-gray-400 @error('name') border-red-400 @enderror placeholder-gray-400"
                               autofocus autocomplete="name">
                    </div>
                    @error('name')
                    <p class="mt-1 px-0.5 text-xs text-red-600 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <div>
                        <label for="email" class="text-sm font-medium text-gray-700">Email Address:</label>
                    </div>
                    <div class="mt-1">
                        <input wire:model.defer="email" type="email" id="email" placeholder="e.g. johndoe@example.com"
                               class="w-full rounded-md border-gray-400 @error('email') border-red-400 @enderror placeholder-gray-400"
                               autocomplete="email">
                    </div>
                    @error('email')
                    <p class="mt-1 px-0.5 text-xs text-red-600 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <div>
                        <label for="message" class="text-sm font-medium text-gray-700">Message:</label>
                    </div>
                    <div class="mt-1">
                        <textarea wire:model.defer="message" type="email" id="message"
                                  placeholder="Something interesting perhaps."
                                  class="w-full rounded-md resize-none h-32 border-gray-400 @error('message') border-red-400 @enderror placeholder-gray-400"></textarea>
                    </div>
                    @error('message')
                    <p class="-mt-1 px-0.5 text-xs text-red-600 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <button wire:click.prevent="sendMessage" type="submit"
                            class="focus:outline-none flex w-full items-center justify-center border border-blue-600 bg-blue-600 hover:bg-blue-500 text-white py-2.5 rounded-md font-medium">
                        Send Message
                    </button>
                </div>

                <div class="mt-2 md:hidden">
                    <button type="button" @click.prevent="contactModal = false"
                            class="focus:outline-none flex w-full items-center justify-center border border-gray-800 bg-gray-50 text-gray-800 py-2.5 rounded-md font-normal">
                        Nevermind
                    </button>
                </div>
            </form>
            <!--End Contact Form-->

            <div
                class="hidden absolute -mt-1 top-0 left-0 md:flex items-center justify-center transform -translate-y-full">
                <p class="text-white text-sm">Press ESC or click away to close.</p>
            </div>
        </div>
    </div>
    <!--End Contact Modal-->
</div>

