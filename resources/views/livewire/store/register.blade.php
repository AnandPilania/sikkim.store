<div>
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <div class="px-4 py-8 bg-white md:shadow-md sm:rounded-lg sm:px-10">

                <div class="mb-5 flex flex-col items-center justify-center">
                    <a href="{{ route('home') }}" class="inline-block">
                        <x-logo class="w-auto h-16 text-green-600"/>
                    </a>
                    <h2 class="text-sm font-semibold text-center text-gray-900 leading-9">
                        Register new store
                    </h2>
                </div>

                @if($invitationVerified)
                    <form wire:submit.prevent="register">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 leading-5">
                                Store Name
                            </label>

                            <div class="mt-1 rounded-md shadow-sm">
                                <input wire:model="name" id="name" type="text" required autofocus
                                       class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror"/>
                            </div>

                            @error('name')
                            <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-6">
                            <label for="password" class="block text-xs font-medium text-gray-500 leading-5">
                                Store Username
                            </label>

                            <div class="mt-1 rounded-md shadow-sm">
                                <div
                                    class="appearance-none text-gray-500 block w-full px-3 py-2 border border-gray-300 rounded-md sm:text-sm sm:leading-5">
                                    {{ $slug ?? 'username'}}
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                                Password
                            </label>

                            <div class="mt-1 rounded-md shadow-sm">
                                <input wire:model.defer="password" id="password" type="password" required
                                       class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror"/>
                            </div>

                            @error('password')
                            <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-6">
                            <label for="password_confirmation"
                                   class="block text-sm font-medium text-gray-700 leading-5">
                                Confirm Password
                            </label>

                            <div class="mt-1 rounded-md shadow-sm">
                                <input wire:model.defer="passwordConfirmation"
                                       id="password_confirmation" type="password" required
                                       class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 appearance-none rounded-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                            </div>
                        </div>

                        <div class="mt-6">
                            <div class="block w-full rounded-md shadow-sm">
                                <button wire:loading.remove wire:target="register" type="submit"
                                        class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white  border border-transparent rounded-md  focus:outline-none  bg-green-600 hover:bg-green-500 focus:border-green-700 focus:shadow-outline-green active:bg-green-700 transition duration-150 ease-in-out">
                                    Register
                                </button>
                                <div wire:loading wire:target="register"
                                     class="w-full px-4 py-2 text-sm font-medium text-white border border-transparent rounded-md bg-green-500 cursor-wait ">
                                    <div class="flex items-center justify-center">
                                        <svg class="animate-spin mr-3 h-5 w-5 text-white" fill="none"
                                             viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="#ffffff"
                                                    stroke-width="3px" fill="none"></circle>
                                            <path class="opacity-75" fill="#ffffff"
                                                  d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                        </svg>
                                        <div>
                                            <p>Please wait.... </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                @else
                    <form wire:submit.prevent="verifyInvitation">
                        <div>
                            <label for="invitationCode" class="block text-sm font-medium text-gray-700 leading-5">
                                Invitation Code
                            </label>

                            <div class="mt-1 rounded-md shadow-sm">
                                <input wire:model.lazy="invitationCode" id="invitationCode" type="text" required
                                       autofocus
                                       class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror"/>
                            </div>

                            @error('invitationCode')
                            <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-6">
                            <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                                Email address
                            </label>

                            <div class="mt-1 rounded-md shadow-sm">
                                <input wire:model.lazy="email" id="email" type="email" required
                                       class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror"/>
                            </div>

                            @error('email')
                            <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-6">
                            <div class="block w-full rounded-md shadow-sm">
                                <button type="submit"
                                        class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-md hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700 transition duration-150 ease-in-out">
                                    Verify Invitation Code
                                </button>
                            </div>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>
