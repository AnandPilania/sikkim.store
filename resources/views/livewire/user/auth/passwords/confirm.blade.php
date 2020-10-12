<x-slot name="title">Confirm your password</x-slot>
<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <div class="mb-5 flex flex-col items-center justify-center">
                <h2 class="text-sm font-semibold text-center text-gray-900 leading-9">
                    Password Confirm
                </h2>
                <p class="mt-2 text-xs text-center text-gray-600 leading-5 max-w">
                    Please confirm your password before continuing
                </p>
            </div>

            <form wire:submit.prevent="confirm">
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                        Password
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="password" id="password" name="password" type="password" required
                               autofocus
                               class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror"/>
                    </div>

                    @error('password')
                    <p class="mt-2 text-xs text-red-600" id="password-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-end mt-6">
                    <div class="text-sm leading-5">
                        <a href="{{ route('password.request') }}"
                           class="font-medium text-green-600 hover:text-green-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit"
                                class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-md hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700 transition duration-150 ease-in-out">
                            Confirm password
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
